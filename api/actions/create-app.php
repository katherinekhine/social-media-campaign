<?php
include "../db/db.php";
include "../db/app-create-process.php";

$db = new Database();
$app = new App($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming $app is already instantiated
    $title = $_POST['title'];
    $des = $_POST['des'];
    $image = $_POST['image'];

    // Create the app
    $result = $app->createApp($title, $des, $image);
    if ($result) {
        // Success: Redirect to app page
        header("Location:../admin-app.php");
        exit();
    } else {
        // Error: Handle the error (e.g., display an error message)
        echo "Failed to create app. Please try again.";
        exit();
    }
} else {
    // If not a POST request, handle accordingly
    echo "Can't create";
    exit();
}
