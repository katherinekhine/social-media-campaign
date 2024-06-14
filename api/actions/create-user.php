<?php
include "../db/db.php";
include "../db/user.php";

$db = new Database();
$user = new User($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['conpassword'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];

    if ($password == $confirmPassword) {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->createUser($fname, $lname, $email, $hashPassword, $phone, $country, $gender);
        // CHECK:: Update here
        // header("Location:../api/loginform.php");
        header("Location: /login");
        exit();
    } else {
        echo "Passwords do not match";
        exit();
    }
}
