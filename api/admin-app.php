<?php
session_start();

// Include database class
include '../db/db.php';

// Create an instance of the Database class
$db = new Database();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin(Social Media App)</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">

</head>

<body>
    <!--  Header Start  -->
    <header>
        <div class="header">
            <h1>Social Media Campaign</h1>
        </div>
        <div class="second-header">
            <a href="admin.php" class="logo">SMC</a>
            <?php
            include("translate.php");
            ?>

            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="admin.php">User List</a></li>
                    <li><a href="admin-app.php" class="active">Social Media Apps</a></li>
                    <li><a href="admin-contact.php">Contact</a></li>

                    <li><a href="../actions/logout-user.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->

    <div class="container par-mt">
        <div class="table-header">
            <p class="creation">Social Media Applications</p>
            <div>
                <button class="back"><a href="admin-app-create.php">
                        + Create</a></button>
            </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>


            <?php
            // Fetch apps from the database
            $apps = $db->read("SELECT * FROM apps");

            // Iterate through each user and display their information
            foreach ($apps as $app) {
                echo "<tr>";
                echo "<td>" . $app['id'] . "</td>";
                echo "<td>" . $app['title'] . "</td>";
                echo "<td class='msg'>" . $app['des'] . "</td>";
                echo "<td><img class='tb-img' src='../img/" . $app['image'] . "' alt='App Image'></td>";
                echo "<td class='msg'><a href='admin-app-edit.php?appId=" . $app['id'] . "'>Edit</a>|<a href='#' onclick='showConfirm(" . $app['id'] . ")'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <script type="text/javascript">
        function showConfirm(appId) {
            if (confirm("Are you sure you want to delete this app?")) {
                window.location.href = "../actions/delete-app.php?appId=" + appId;
            }
        }
    </script>
</body>

</html>