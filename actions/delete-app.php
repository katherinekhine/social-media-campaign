<?php
include "../db/db.php";
include "../db/app-create-process.php";

$db = new Database();
$app = new App($db);


// Check if 'appId' is set in the URL
if (isset($_GET['appId'])) {
    // Get the value of 'appId' from the URL
    $appId = $_GET['appId'];

    $app->deleteApp($appId);
    header("Location:../api/admin-app.php");
    exit();
} else {
    // If 'appId' is not set in the URL, handle accordingly
    echo "Failed to delete app. Please try again.";
    exit();
}
