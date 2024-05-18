<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
</head>

<body>
    <!--  Header Start  -->
    <header>
        <div class="header">
            <h1>Social Media Campaign</h1>
        </div>
        <div class="second-header">
            <a href="home.php" class="logo">SMC</a>
            <?php
            include("translate.php");
            ?>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="information.php" class="active">Information</a></li>
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
                    include("./actions/show-acc.php");
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->

    <!-- section start -->
    <section class="container par-mt">
        <div class="about">
            <div class="about-img home-img-ani">
                <img src="./img/about-us.png" alt="about us">
            </div>
            <div class="about-us home-ani">
                <h2>About Social Media Campaigns Ltd.(SMC)</h2>
                <p>At Social Media Campaigns Ltd. (SMC), we are passionate about ensuring the safety and well-being of teenagers in today's digital world. Founded in [2024], our organization was born out of a deep concern for the challenges and risks that adolescents face while navigating social media platforms.</p>
            </div>
        </div>
        <p class="mission heading-ani">Our Mission</p>
        <div class="our-mission">
            <div class="mission-text home-p-ani">
                <p><b> Our mission at SMC </b> is simple yet profound: to empower teenagers with the knowledge, skills, and resources they need to stay safe and thrive in their online interactions. We believe that by educating young people about the potential dangers of social media and providing them with practical strategies for mitigating risks, we can foster a healthier digital environment for all.</p>
            </div>
            <div class="our-mission-img home-p-img-ani">
                <img src="./img/our-mission.jpg" alt="mission">
            </div>
        </div>
        <p class="mission heading-ani">Explore Safely</p>
        <div class="safely">
            <div class="safely-img home-img-ani">
                <img src="./img/safely.jpg" alt="about us">
            </div>
            <div class="safely-text home-ani">
                <p>On our website, you'll find valuable information on the most popular social media apps, along with tips on how to use them responsibly. From understanding privacy settings to recognizing online threats, we're here to help you stay one step ahead and make the most of your online experience.</p>
            </div>
        </div>
        <p class="mission">Our Team</p>
        <div class="our-mission">
            <div class="mission-text home-p-ani">
                <p>At the heart of SMC is a dedicated team of professionals with expertise in child psychology, digital safety, education, and technology. Our team is committed to staying abreast of the latest trends and developments in social media and online safety, ensuring that our resources and programs remain relevant and effective.</p>
            </div>
            <div class="our-mission-img home-p-img-ani">
                <img src="./img/team.jpg" alt="team">
            </div>
        </div>
    </section>

    <!-- section end -->




    <!-- footer start-->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById("here").innerHTML = "You're at <b>Information</b> Page.";
    </script>
    <!-- footer end-->
</body>

</html>