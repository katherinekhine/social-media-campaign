<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location:../index.php");
    exit();
}

$user = $_SESSION['user'][0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
</head>

<body>

    <!--  Header Start  -->
    <header>
        <div class="header">
            <h1>Social Media Campaign</h1>
        </div>
        <div class="second-header">
            <a href="index.php" class="logo">SMC</a>
            <?php
            include("translate.php");
            ?>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="information.php">Information</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="parent-help.php">How Parents Can Help</a></li>
                            <li><a href="social-media.php">Social Media Apps</a></li>
                            <li><a href="livestream.php">Livestreaming</a></li>
                            <li><a href="guidance.php">Guidance</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>

                    <?php
                    if (isset($_SESSION['user'])) {


                        if ($user) {
                            echo "<li><a href='./account.php' class='active'>" . $user['fname'] . "</a></li>
                            <li><a href='./actions/logout-user.php'>Logout</a></li>";
                        } else {
                            echo ' <li><a href="#">Login +</a>
            <ul>
                <li><a href="loginform.php">Login</a></li>
                <li><a href="registerform.php">Register</a></li>
            </ul>
        </li>';
                        }
                    } else {
                        echo ' <li><a href="#">Login +</a>
        <ul>
            <li><a href="loginform.php">Login</a></li>
            <li><a href="registerform.php">Register</a></li>
        </ul>
    </li>';
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </header>

    <div class="account container">
        <h1><?= $user['fname'] . " " . $user['lname'] ?>'s account </h1>
        <?php if ($user['image']) : ?>
            <img src="./img/uploads/<?= $user['image'] ?>" alt="">
        <?php endif ?>
        <form action="./actions/edit-user.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" placeholder="upload image">
            <button type="submit">Upload</button>
        </form>
        <form action="./actions/user-edit.php" method="post">
            <input type="text" name="fname" value="<?php echo $user['fname'] ?>" placeholder="First Name">
            <input type="text" name="lname" value="<?php echo $user['lname'] ?>" placeholder="Last Name">
            <input type="tel" name="phone" value="<?php echo $user['phone'] ?>" placeholder="Phone">
            <button type="submit">Save</button>
        </form>
    </div>
</body>

</html>