<?php
session_start();

// Include database class
include './db/db.php';

// Create an instance of the Database class
$db = new Database();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">

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
                    <li><a href="admin.php" class="active">User List</a></li>
                    <li><a href="admin-app.php">Social Media Apps</a></li>
                    <li><a href="admin-contact.php">Contact</a></li>

                    <li><a href="./actions/logout-user.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->

    <section class="container">
        <p class="mission par-mt">User List</p>

        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Action</th>
            </tr>


            <?php
            // Fetch users from the database
            $users = $db->read("SELECT * FROM users");

            // Iterate through each user and display their information
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['fname'] . "</td>";
                echo "<td>" . $user['lname'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['phone'] . "</td>";
                echo "<td>" . $user['gender'] . "</td>";
                echo "<td>" . $user['country'] . "</td>";
                echo "<td><a href='#' onclick='showConfirm(" . $user['id'] . ")'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>

    <script type="text/javascript">
        function showConfirm(userID) {
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = "./actions/delete-user.php?userID=" + userID;
            }

        }
    </script>
</body>

</html>