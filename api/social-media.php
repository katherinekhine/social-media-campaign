<?php

// Include database class
include '../db/db.php';

// Create an instance of the Database class
$db = new Database();

// Initialize search query variable
$searchQuery = "";

// Check if the search query is submitted
if (isset($_GET['search'])) {
    // Get the search query
    $searchQuery = $_GET['search'];

    // Fetch apps from the database based on the search query
    $apps = $db->read("SELECT * FROM apps WHERE title LIKE '%$searchQuery%' OR des LIKE '%$searchQuery%'");
} else {
    // If no search query is provided, fetch all apps
    $apps = $db->read("SELECT * FROM apps");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Apps</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
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
                    <li><a href="social-media.php" class="active">Social Media Apps</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="information.php">Information</a></li>
                            <li><a href="parent-help.php">How Parents Can Help</a></li>
                            <li><a href="livestream.php">Livestreaming</a></li>
                            <li><a href="guidance.php">Guidance</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>

                    <?php
                    include("../actions/show-acc.php");
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->

    <!--  Search Text Start   -->
    <div class="search-app">
        <form action="" method="get">
            <input type="text" placeholder="Search Here" name="search" value="<?php echo $searchQuery; ?>">
            <button type="submit">Search</button>
        </form>
    </div>
    <!--  Search Text End   -->

    <section class="container">
        <div class="social-con">
            <?php
            // Check if there are any apps fetched
            if ($apps) {
                // Loop through each app
                foreach ($apps as $app) {
            ?>
                    <div class="social-div">
                        <div class="social-app">
                            <img src="../img/<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>">
                        </div>
                        <div class="social-txt">
                            <h4 class="social-title">Title: <?php echo isset($app['title']) ? $app['title'] : 'Title Not Available'; ?></h4>
                            <p class="social-p"><b>Description:</b> <?php echo isset($app['des']) ? $app['des'] : 'Description Not Available'; ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                // If no apps are found in the database
                echo "<p>No social media apps found.</p>";
            }
            ?>
        </div>
    </section>


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById("here").innerHTML = "You're at <b>Social Media Apps</b> Page.";
    </script>
    <!-- footer end -->
</body>

</html>