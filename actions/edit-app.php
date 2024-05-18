<?php
include "../db/db.php";
include "../db/app-create-process.php";

$db = new Database();
$app = new App($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appId = $_GET['appId'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $image = null; // Initialize image variable
    $error = ''; // Initialize error message variable

    // File upload handling
    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $target_dir = __DIR__ . "/../img/";
        $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $imageFileName = uniqid() . '.' . $fileExtension;
        $target_file = $target_dir . $imageFileName;

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            $error = "Sorry, your file is too large.";
        } elseif (!in_array($fileExtension, ["jpg", "jpeg", "png", "gif"])) {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        } elseif (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // File uploaded successfully
            $image = $imageFileName; // Set image variable to the new filename
        } else {
            $error = "Sorry, there was an error uploading your file.";
        }
    }

    if (empty($error)) {
        // Perform app update if no error occurred
        $result = $app->editApp($appId, $title, $des, $image);

        if ($result) {
            // Redirect to app page after successful update
            header("Location:../admin-app.php");
            exit();
        } else {
            $error = "Failed to update app. Please try again.";
        }
    }
} else {
    // If not a POST request, handle accordingly
    $error = "Can't update. Invalid request.";
}

// Display error message if any
if (!empty($error)) {
    echo $error;
}
