<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
</head>

<body>
    <!--  Header Start  -->
    <header>
        <div class="header">
            <h1>Social Media Campaign</h1>
        </div>
        <div class="second-header">
            <a href="./" class="logo">SMC</a>
            <?php
            include("translate.php");
            ?>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="information">Information</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="parent-help">How Parents Can Help</a></li>
                            <li><a href="social-media">Social Media Apps</a></li>
                            <li><a href="livestream">Livestreaming</a></li>
                            <li><a href="guidance">Guidance</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php" class="active">Contact</a></li>

                    <?php
                    include("../actions/show-acc.php");
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->


    <!--  Contact Form Start  -->
    <section>
        <div class="contact">
            <div class="contact-container">
                <div class="text">
                    Contact Us
                </div>
                <form action="../actions/create-contact.php" method="post">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" id="firstname" name="fname" required>
                            <div class="underline"></div>
                            <label for="firstname">First Name</label>
                        </div>
                        <div class="input-data">
                            <input type="text" id="lastname" name="lname" required>
                            <div class="underline"></div>
                            <label for="lastname">Last Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="email" id="email" name="email" required>
                            <div class="underline"></div>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="input-data">
                            <input type="text" id="phone" name="phone" required>
                            <div class="underline"></div>
                            <label for="phone">Phone Number</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="80" id="msg" name="msg" required></textarea>
                            <br>
                            <div class="underline"></div>
                            <label for="msg">Write your message</label>
                            <div class="privacy-link">
                                <a href="privacy.php">Privacy Policy</a>
                            </div>
                            <div class="form-row submit-btn">
                                <div class="input-data">
                                    <button type="submit">Sent</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--  Contact Form End  -->


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById("here").innerHTML = "You're at <b>Contact</b> Page.";
    </script>
    <!-- footer end -->

</body>

</html>