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
    <title>Admin Contact</title>
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
                    <li><a href="admin-app.php">Social Media Apps</a></li>
                    <li><a href="admin-contact.php" class="active">Contact</a></li>

                    <li><a href="../actions/logout-user.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->



    <section class="container">
        <p class="mission par-mt">Contact</p>

        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>


            <?php
            // Fetch users from the database
            $contacts = $db->read("SELECT * FROM contacts");

            // Iterate through each user and display their information
            foreach ($contacts as $contact) {
                echo "<tr>";
                echo "<td>" . $contact['id'] . "</td>";
                echo "<td>" . $contact['fname'] . "</td>";
                echo "<td>" . $contact['lname'] . "</td>";
                echo "<td>" . $contact['email'] . "</td>";
                echo "<td>" . $contact['phone'] . "</td>";
                echo "<td class='msg'>" . $contact['msg'] . "</td>";
            }
            ?>
        </table>
    </section>
</body>

</html>