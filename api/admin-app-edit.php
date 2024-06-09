<?php
include "../db/db.php";
include "../db/app-create-process.php";

$db = new Database();
$app = new App($db);

$appId = $_GET['appId'];
$appEdit = $app->getAppByID($appId);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Create</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <div class="table-header">
            <p class="creation">App Edit Form</p>
            <div>
                <button class="back"><a href="admin-app.php">
                        << Back</a></button>
            </div>
        </div>
        <form action="../actions/edit-app.php?appId=<?php echo $appId ?>" method="post" enctype="multipart/form-data">
            <div class="create-img">
                <img src="../img/<?php echo $appEdit[0]['image'] ?>" alt="Current Image" class="tb-img">
                <!-- Display the existing image above the file input field -->
                <input type="file" name="image" placeholder="Upload New Image">
            </div>
            <div class="create-box">
                <span class="create-details">Title:</span>
                <input type="text" value="<?php echo $appEdit[0]['title'] ?>" placeholder="Enter Your Title" name="title" required>
            </div>
            <div class="create-box">
                <span class="create-details">Description:</span>
                <textarea name="des" cols="30" rows="10" placeholder="Please Enter Description"><?php echo $appEdit[0]['des'] ?></textarea>
            </div>
            <div class="create-btn">
                <input type="submit" value="Edit">
            </div>
        </form>

    </div>
</body>

</html>