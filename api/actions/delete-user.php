<?php
include "../db/db.php";
include "../db/user.php";

$db = new Database();
$user = new User($db);


// Check if 'userId' is set in the URL
if (isset($_GET['userID'])) {
    // Get the value of 'userID' from the URL
    $userID = $_GET['userID'];

    $user->deleteUser($userID);
    header("Location:../api/admin.php");
    exit();
} else {
    // If 'userId' is not set in the URL, handle accordingly
    echo "Failed to delete app. Please try again.";
    exit();
}
