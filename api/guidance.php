<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
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
                    <li><a href="guidance.php" class="active">Guidance</a></li>
                    <li><a href="#">More +</a>
                        <ul>
                            <li><a href="information">Information</a></li>
                            <li><a href="parent-help">How Parents Can Help</a></li>
                            <li><a href="social-media">Social Media Apps</a></li>
                            <li><a href="livestream">Livestreaming</a></li>
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

    <!-- section start -->
    <section class="container par-mt">
        <p class="mission">Legislation and Guidance</p>
        <div class="slider">
            <div class="my-slide fade">
                <div class="txt">
                    <p>Navigating the legal landscape and adhering to best practices is crucial for promoting a safe and responsible online environment, especially when it comes to social media use. </p>
                </div>
                <img src="../img/gui.jpg" alt="">
            </div>
            <div class="my-slide fade">
                <div class="txt">
                    <p>Navigating the legal landscape and adhering to best practices is crucial for promoting a safe and responsible online environment, especially when it comes to social media use. </p>
                </div>
                <img src="../img/gui-1.jpg" alt="">
            </div>
            <div class="my-slide fade">
                <div class="txt">
                    <p>Navigating the legal landscape and adhering to best practices is crucial for promoting a safe and responsible online environment, especially when it comes to social media use. </p>
                </div>
                <img src="../img/guidance-2.jpg" alt="">
            </div>
            <div class="my-slide fade">
                <div class=" txt">
                    <p>Navigating the legal landscape and adhering to best practices is crucial for promoting a safe and responsible online environment, especially when it comes to social media use. </p>
                </div>
                <img src="../img/guidance-3.jpg" alt="">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="dots-box">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
        <p class="mission">Legislation</p>
        <div class="le-container">
            <div class="le-div">
                <div class="le-img">
                    <img src="../img/le.jpg" alt="legislation">
                </div>
                <div class="le-content">
                    <p class="gui-p"><b>1. Children's Online Privacy Protection Act (COPPA):</b> COPPA is a U.S. federal law designed to protect the privacy of children under the age of 13 by requiring parental consent for the collection and use of personal information online. Websites and online services that are directed towards children or knowingly collect personal information from children must comply with COPPA regulations.</p>
                </div>
            </div>
            <div class="le-div">
                <div class="le-img">
                    <img src="../img/le-1.jpg" alt="legislation">
                </div>
                <div class="le-content">
                    <p class="le-p"><b>2. General Data Protection Regulation (GDPR):</b> GDPR is a European Union regulation that governs the collection, processing, and storage of personal data of EU residents. It establishes strict guidelines for data protection and privacy rights, including the right to access, rectify, and erase personal data, as well as the requirement for clear and explicit consent for data processing activities.</p>
                </div>
            </div>
            <div class="le-div">
                <div class="le-img">
                    <img src="../img/le-2.jpg" alt="legislation">
                </div>
                <div class="le-content">
                    <p class="le-p"><b>3. Cyberbullying Legislation:</b> Many countries have enacted legislation specifically targeting cyberbullying, which involves the use of digital technology to harass, intimidate, or harm others. These laws may include provisions for criminalizing cyberbullying behaviors, providing legal remedies for victims, and promoting prevention and education initiatives.</p>
                </div>
            </div>
        </div>
        <p class="mission">Best Practice Guidance</p>
        <div class="gui-container">
            <div class="gui-div gui-bg">
                <div class="gui-img">
                    <img src="../img/online-safety.jpg" alt="online safety">
                </div>
                <div class="gui-content">
                    <p class="gui-p"><b>1. Online Safety Education:</b> Promote online safety education and awareness initiatives for users of all ages, with a particular focus on children and teenagers. Encourage schools, parents, and community organizations to provide comprehensive education on topics such as privacy protection, digital citizenship, and responsible social media use.</p>
                </div>
            </div>
            <div class="gui-div gui-bg">
                <div class="gui-img">
                    <img src="../img/privacy-setting.jpg" alt="privacy setting">
                </div>
                <div class="gui-content">
                    <p class="gui-p"><b>2. Privacy Settings and Controls:</b> Encourage users to review and customize their privacy settings and controls on social media platforms to manage their online presence and protect their personal information. Provide guidance on how to adjust privacy settings, limit data sharing, and control who can view and interact with their content.</p>
                </div>
            </div>
            <div class="gui-div gui-bg">
                <div class="gui-img">
                    <img src="../img/digital.jpg" alt="Digital Well-being">
                </div>
                <div class="gui-content">
                    <p class="gui-p"><b>3. Digital Well-being:</b> Promote digital well-being practices to help users maintain a healthy balance between their online and offline activities. Encourage regular breaks from screens, mindfulness practices, and self-reflection to support mental and emotional well-being in the digital age.</p>
                </div>
            </div>
            <div class="gui-div gui-bg">
                <div class="gui-img">
                    <img src="../img/reporting.jpg" alt="Reporting Mechanisms">
                </div>
                <div class="gui-content">
                    <p class="gui-p"><b>4. Reporting Mechanisms:</b> Advocate for the implementation of robust reporting mechanisms on social media platforms to enable users to report abusive or harmful content, cyberbullying incidents, and other violations of community guidelines. Encourage platforms to take swift and appropriate action in response to reports to ensure user safety and accountability.</p>
                </div>
            </div>
        </div>
        <div class="safe-div guidance-div gui-bg">
            <div class="safe-first">
                <img src="../img/promote.jpg" alt="Collaboration and Partnership">
            </div>
            <div class="safe-second">
                <p class="gui-p"><b>5. Collaboration and Partnership:</b> Foster collaboration and partnership between government agencies, industry stakeholders, non-profit organizations, and academic institutions to address emerging challenges and promote best practices in online safety and digital citizenship. Encourage multi-stakeholder initiatives to develop resources, tools, and guidelines for promoting responsible online behavior.</p>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- footer start -->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById("here").innerHTML = "You're at <b>Guidance</b> Page.";
    </script>
    <!-- footer end -->

    <!-- slideshow js start -->
    <script>
        const mySlide = document.querySelectorAll(".my-slide");
        const dot = document.querySelectorAll(".dot");

        let counter = 1;
        slideFun(counter);

        let timer = setInterval(autoSlide, 5000);

        function autoSlide() {
            counter += 1;
            slideFun(counter);
        }

        function plusSlides(n) {
            counter += n;
            slideFun(counter);
            resetTimer();
        }

        function currentSlide(n) {
            counter = n;
            slideFun(counter);
            resetTimer();
        }

        function resetTimer() {
            clearInterval(timer);
            timer = setInterval(autoSlide, 5000);
        }

        function slideFun(n) {
            let i;
            for (i = 0; i < mySlide.length; i++) {
                mySlide[i].style.display = "none";
            }
            for (i = 0; i < dot.length; i++) {
                dot[i].classList.remove("dot-active");
            }
            if (n > mySlide.length) {
                counter = 1;
            }
            if (n < 1) {
                counter = mySlide.length;
            }
            mySlide[counter - 1].style.display = "block";
            dot[counter - 1].classList.add("dot-active");
        }
    </script>
    <!-- slideshow js end -->

</body>

</html>