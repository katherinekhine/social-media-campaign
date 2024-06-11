<?php
session_start();
include "../db/db.php";
include "../db/user.php";

$db = new Database();
$user = new User($db);

if (isset($_SESSION['counter'])) {
    $counter = $_SESSION['counter'];

    if ($counter == 3) {
        echo "<script>window.location.href='login-timer.php';</script>";
        setcookie('login_fail', 'fail', time() + 60 * 10, "/", "localhost");
    }
} else {
    $counter = 1; //first time
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $dbUser = $user->getUserByEmail($email);

    if (count($dbUser) > 0) {
        if (password_verify($password, $dbUser[0]['password'])) {
            $_SESSION['user'] = $dbUser;
            if ($dbUser[0]['role_id'] == 1) {
                header("Location:../api/index.php");
                exit();
            }
            if ($dbUser[0]['role_id'] == 2) {
                header("Location:../api/admin.php");
                exit();
            }
        } else {
            echo "<script>alert('Incorrect password!');</script>";
            $counter++; // Increment the counter
            $_SESSION['counter'] = $counter; // Update the session counter
            // CHECK :: Update Here
            // echo "<script>window.location.href='../api/loginform.php';</script>"; // Redirect back to login form
            echo "<script>window.location.href='/login';</script>"; // Redirect back to login form
            exit();
        }
    } else {
        echo "<script>alert('User not found!');</script>";
        exit();
    }
}
