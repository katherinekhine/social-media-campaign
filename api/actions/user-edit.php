<?php
session_start();
include "../db/db.php";
include "../db/user.php";

$db = new Database();
$user = new User($db);
$sessionUser  = $_SESSION['user'][0];


if (isset($_POST['fname']) && (isset($_POST['lname'])) && (isset($_POST['fname']))) {
    $user->editUserById($sessionUser['id'], $_POST['fname'], $_POST['lname'], $_POST['phone']);
    $_SESSION['user'][0]['fname'] = $_POST["fname"];
    $_SESSION['user'][0]['lname'] = $_POST["lname"];
    $_SESSION['user'][0]['phone'] = $_POST["phone"];
    header('Location:../api/account.php');
    exit();
} else {
    echo "Error";
    exit();
}
