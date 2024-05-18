<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Can Parents Help</title>
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
                    <li><a href="parent-help.php" class="active">How Parents Can Help</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="information.php">Information</a></li>
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
        <p class="mission heading-ani">How Parents Can Help</p>
        <div class="home-vd vd-ani">
            <iframe src="https://www.youtube.com/embed/3IaW8KbAiNw?si=XN3ACLubZuT0xjFq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="safe-div parent-first-bg">
            <div class="safe-first home-img-ani">
                <img src="img/social-helping1.jpg" alt="social helping from parents">
            </div>
            <div class="safe-second home-ani">
                <p class="safe-p">As a parent, you play a crucial role in supporting your teenager's healthy use of social media. Here are some top tips to help you navigate this digital landscape and promote a positive online experience for your child:</p>
                <p class="safe-p"><b>1. Open Communication:</b> Foster open and honest communication with your teenager about their online activities. Encourage them to share their experiences, concerns, and questions with you without fear of judgment or punishment.</p>
                <p class="safe-p"><b>2. Set Clear Boundaries:</b> Establish clear guidelines and rules for your teenager's use of social media, including designated screen time limits, acceptable content guidelines, and rules around privacy and online interactions.</p>
            </div>
        </div>
        <div class="safe-div parent-first-bg">
            <div class="safe-fir-div safe-second home-p-ani">
                <p class="safe-p"><b>3. Lead by Example:</b> Be a positive role model for your teenager by demonstrating responsible and respectful behavior online. Show them how to use social media responsibly, manage their privacy settings, and interact respectfully with others.</p>
                <p class="safe-p"><b>4. Monitor Their Activity:</b> Stay informed about your teenager's online activities by regularly monitoring their social media accounts, friend lists, and messages. Use parental control tools and privacy settings to help protect them from inappropriate content and online risks.</p>
            </div>
            <div class="safe-sec-div home-p-img-ani">
                <img src="img/social-helping3.jpg" alt="social helping from parents">
            </div>
        </div>
        <div class="home-vd vd-ani">
            <iframe src="https://www.youtube.com/embed/CP8oFSJ8gEA?si=JVaEk7SUpn069HLf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="safe-div parent-first-bg">
            <div class="safe-first home-img-ani">
                <img src="img/social-helping4.jpg" alt="social helping from parents">
            </div>
            <div class="safe-second home-ani">
                <p class="safe-p"><b>5. Educate About Online Safety:</b> Teach your teenager about the importance of online safety and privacy. Discuss topics such as cyberbullies, online predators, identity theft, and the consequences of sharing personal information online.</p>
                <p class="safe-p"><b>6. Encourage Critical Thinking:</b> Help your teenager develop critical thinking skills to evaluate the credibility and reliability of online information. Encourage them to question and verify the sources of information they encounter online before believing or sharing it.</p>
            </div>
        </div>
        <div class="safe-div parent-first-bg">
            <div class="safe-fir-div safe-second home-p-ani">
                <p class="safe-p"><b>7. Promote Healthy Balance:</b> Encourage your teenager to maintain a healthy balance between their online and offline activities. Encourage them to pursue other interests and hobbies outside of social media and to prioritize face-to-face interactions with friends and family.</p>
                <p class="safe-p"><b>8. Be Supportive and Understanding:</b> Be supportive and understanding of your teenager's experiences and challenges online. Offer guidance, encouragement, and support as they navigate the complexities of social media and online relationships</p>
            </div>
            <div class="safe-sec-div home-p-img-ani">
                <img src="img/social-helping5.jpg" alt="social helping from parents">
            </div>
        </div>
        <div class="safe-div parent-first-bg">
            <div class="safe-first home-img-ani">
                <img src="img/social-helping6.jpg" alt="social helping from parents">
            </div>
            <div class="safe-second home-ani">
                <p class="safe-p"><b>9. Stay Engaged and Involved:</b> Stay actively engaged in your teenager's online world by participating in their online activities, discussing their interests and concerns, and staying informed about the latest trends and platforms.</p>
                <p class="safe-p"><b>10. Seek Professional Help if Needed:</b> If you're concerned about your teenager's online behavior or mental well-being, don't hesitate to seek professional help from a counselor, therapist, or mental health professional.</p>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById("here").innerHTML = "You're at <b>How Parents Can Help</b> Page.";
    </script>
    <!-- footer end -->
</body>

</html>