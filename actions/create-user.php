<?php
include "../db/db.php";
include "../db/user.php";

$db = new Database();
$user = new User($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $recaptcha = $_POST['g-recaptcha-response'];
    $secret_key = '6LcROIIpAAAAAHDVNcHEqtcqZflFNE534MiN0odC';

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;

    $response = file_get_contents($url);

    $response = json_decode($response);

    if ($response->success == true) {

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
            header("Location:../loginform.php");
            exit();
        } else {
            echo "Passwords do not match";
            exit();
        }
    } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
    }
}
