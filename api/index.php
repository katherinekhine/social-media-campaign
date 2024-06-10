<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Ensure correct path to db.php
include __DIR__ . '/../db/db.php';

// Create an instance of the Database class
$db = new Database();
$apps = $db->read("SELECT * FROM apps limit 3");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="information">Information</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="parent-help">How Parents Can Help</a></li>
                            <li><a href="social-media">Social Media Apps</a></li>
                            <li><a href="livestream">Livestreaming</a></li>
                            <li><a href="guidance">Guidance</a></li>
                        </ul>
                    </li>
                    <li><a href="contact">Contact</a></li>

                    <?php
                    include __DIR__ . '/../actions/show-acc.php';
                    ?>

                </ul>
            </nav>
        </div>
    </header>
    <!--  Header End  -->

    <!--  Search Text Start   -->
    <div class="search search-ani">
        <input type="text" placeholder="Search Here">
        <a href="social-media.php">Search</a>
    </div>
    <!--  Search Text End   -->
    <section class="container">
        <div class="maindiv">
            <div class="first-div home-img-ani">
                <img src="../img/home.jpg" alt="home image">
            </div>
            <div class="second-div home-ani">
                <h3>Welcome to Social Media Campaigns Ltd. (SMC)!</h3>
                <p>Social media has become an essential feature of our lives in the current digital era, particularly for teenagers. It presents risks that could jeopardize their safety and wellbeing even if it provides a wealth of options for self-expression and connection. Our goal at SMC is to equip teenagers with the knowledge and skills necessary to use social media in safely and responsibly.</p>
                <p>As you browse our website, you'll find insightful articles and useful tools designed to keep teenagers safety online. We are here to help you every step of the way, from pointers on spotting possible threats to helpful counsel on handling privacy settings.</p>
            </div>
        </div>

        <h2 class="stay-safe heading-ani">How To Stay Safe Online???</h2>
        <div class="home-vd vd-ani">
            <iframe src="https://www.youtube.com/embed/aO858HyFbKI?si=1_T6j3HChhz1hRwZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="safe-div first-safe-div">
            <div class="safe-first home-img-ani">
                <img src="../img/thinking.jpg" alt="How to stay safe">
            </div>
            <div class="safe-second home-ani">
                <p class="safe-p">Staying safe online is essential in today's interconnected world. Here are some practical tips and guidelines to help you protect yourself while navigating social media platforms:</p>
                <p class="safe-p"><b>1. Manage Your Privacy Settings:</b> Take control of your online presence by carefully managing your privacy settings on social media platforms. Limit the amount of personal information you share publicly and regularly review your privacy settings to ensure they align with your comfort level.</p>
                <p class="safe-p"><b>2. Be Mindful of What You Share:</b> Think twice before posting personal information, photos, or videos online. Remember that once something is shared on the internet, it can be difficult to remove completely. Protect your privacy by being selective about what you share and who you share it with.</p>
            </div>
        </div>
        <div class="safe-div second-safe-div">
            <div class="safe-fir-div safe-second home-p-ani">
                <p class="safe-p"><b>3. Be Kind and Respectful:</b> Practice good digital citizenship by treating others with kindness, respect, and empathy online. Avoid engaging in cyberbullies, harassment, or other harmful behaviors that can negatively impact others' online experiences.</p>
                <p class="safe-p"><b>4. Seek Help and Support:</b> Don't hesitate to reach out for help or support if you encounter any issues or concerns online. Talk to a trusted adult, parent, teacher, or counselor if you need guidance or assistance in dealing with online challenges.</p>
            </div>
            <div class="safe-sec-div home-p-img-ani">
                <img src="../img/kind.jpg" alt="">
            </div>
        </div>
        <div class="safe-div third-safe-div">
            <div class="safe-first home-img-ani">
                <img src="../img/like.jpg" alt="How to stay safe">
            </div>
            <div class="safe-second home-ani">
                <p class="safe-p"><b>5. Think Before You Click: </b> Exercise caution when clicking on links, downloading files, or opening attachments, especially from unknown or suspicious sources. Be wary of phishing attempts and scams designed to steal your personal information or infect your device with malware.</p>
                <p class="safe-p"><b>6. Practice Safe Communication:</b> Be cautious when interacting with strangers online, especially in chat rooms, social media, or online gaming communities. Avoid sharing sensitive information with individuals you don't know and trust, and always verify the identity of online contacts before engaging in personal conversations.</p>
            </div>
        </div>
        <div class="safe-div four-safe-div">
            <div class="safe-fir-div safe-second home-p-ani">
                <p class="safe-p"><b>7. Be Aware of Online Predators:</b> Educate yourself about the signs of online grooming and predatory behavior. Trust your instincts and report any suspicious or inappropriate interactions to a trusted adult or the appropriate authorities.</p>
                <p class="safe-p"><b>8. Protect Your Passwords:</b> Use strong, unique passwords for your online accounts and avoid sharing them with others. Enable two-factor authentication whenever possible to add an extra layer of security to your accounts.</p>
            </div>
            <div class="safe-sec-div home-p-img-ani">
                <img src="../img/password-two.jpg" alt="">
            </div>
        </div>
        <p class="mission heading-ani">What We Offer</p>
        <div class="safely">
            <div class="safely-img home-img-ani">
                <img src="../img/offer.jpg" alt="offer">
            </div>
            <div class="safely-text home-ani">
                <p>Through our online platform, we provide a wide range of educational resources, interactive tools, and expert guidance aimed at promoting safe and responsible social media use among teenagers. From informative articles and videos to interactive workshops and webinars, we strive to equip young people with the tools they need to make informed decisions and protect themselves online.</p>
            </div>
        </div>
        <div class="join">
            <div class="community join-ani">
                <div class="community-img">
                    <img src="../img/join.jpg" alt="join with us">
                </div>
                <p class="com-f">Join Our Community:</p>
                <p class="com-sec">Be part of our growing community of teenagers committed to staying safe online. Sign up for our monthly newsletter to receive the latest updates, tips, and advice straight to your inbox. By joining us, you'll gain access to exclusive content and opportunities to connect with peers who share your interests and concerns.</p>
            </div>
            <div class="community join-ani-2">
                <div class="community-img">
                    <img src="../img/start.jpg" alt="Let's start with us">
                </div>
                <p class="com-f">Get Started:</p>
                <p class="com-sec">Ready to take control of your online safety? Start exploring our website today and discover the tools and resources you need to stay safe, informed, and empowered in your digital journey. Remember, your safety matters to us. Together, let's create a safer and more positive online experience for everyone.</p>

            </div>
        </div>

        <p class="mission social-bt heading-ani">Most Popular Social Media App</p>
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
        document.getElementById("here").innerHTML = "You're at <b>Home</b> Page.";
    </script>
    <!-- footer end -->
</body>

</html>