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
            <p class="creation">App Creation Form</p>
            <div>
                <button class="back"><a href="admin-app.php">
                        << Back</a></button>
            </div>
        </div>
        <form action="../actions/create-app.php" method="post">
            <div class="create-img">
                <input type="file" name="image" placeholder="upload image">
            </div>
            <div class="create-box">
                <span class="create-details">Title:</span>
                <input type="text" placeholder="Enter Your Title" name="title" required>
            </div>
            <div class="create-box">
                <span class="create-details">Description:</span>
                <textarea name="des" cols="30" rows="10" placeholder="Please Enter Description"></textarea>
            </div>
            <div class="create-btn">
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</body>

</html>