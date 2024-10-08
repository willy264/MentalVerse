<?php
$title = "services";
include('../connection/connection.php');
include('inc/cleaninput.php');
include('inc/feedback.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="shortcut icon" href="images/Logo mark with letter mark.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- swiper js -->
    <link rel="stylesheet" href="package/swiper-bundle.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->

    <style>
        .headerImage {
            background-image: url(./images/Image\ \(9\).png);
        }
    </style>

    <title>MentalVerse | Services</title>
</head>

<body>
    <div class="headerImage">
        <nav class="nav-container">
            <div class="logo">
                <img src="images/Asset 1-1.png" alt="">
            </div>
            <div class="nav-cover" id="nav-menu">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="index.php" class="nav-link active">HOME</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">ABOUT US</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link select">
                            <p class="selected">SERVICES <span class="material-symbols-outlined caret">play_for_work</span></p>
                        </a>
                        <ul class="dropdown_menu">
                            <li><a href="services.php" class="drop-link">SERVICES</a></li>
                            <li><a href="servicesDetails.php" class="drop-link">SERVICES DETAILS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link select">
                            <p class="selected">PAGE <span class="material-symbols-outlined caret">play_for_work</span></p>
                        </a>
                        <ul class="dropdown_menu">
                            <li><a href="career.php" class="drop-link">CAREER</a></li>
                            <li><a href="careerDetails.php" class="drop-link">CAREER DETAILS</a></li>
                            <li><a href="pricing.php" class="drop-link">PRICING</a></li>
                            <li><a href="helpCenter.php" class="drop-link">HELP CENTER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="contactUs.php" class="nav-link">CONTACT US</a></li>
                </ul>
                <div class="icons">
                    <a href="login.php" class="icon material-symbols-outlined"><span class="">login</span></a>
                    <a href="register.php" class="icon material-symbols-outlined"><span class="">group_add</span></a>
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' -25, 'opsz' 24" id="menu_open">menu_open</span>
                </div>

            </div>
        </nav>

        <section class="container header">
            <h2>Services</h2>
            <p>Odio cras proin proin sit quis fringilla aliquet. Consectetur elementum viverra egestas egestas nulla ullamcorper varius quam.</p>
        </section>
    </div>

    <section class="container ourServices">
        <div class="top">
            <div class="title">
                <div class="topic">
                    <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                    <p>OUR SERVICES</p>
                </div>
                <h2>Holistic Mental Health Solutions</h2>
            </div>
            <div class="learn">
                <button class="but">ALL SERVICES</button>
            </div>
        </div>
        <div class="bottom">
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Individual Therapy</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Group Therapy</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Family Counseling</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Couples Counseling</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Meditation Workshops</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
            <div class="therapyCard">
                <div class="circle">
                    <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24">star_rate</span>
                </div>
                <h3>Teletherapy Services</h3>
                <p>Id nisl lacus penatibus bibendum vitae lectus et a. Lorem nulla nulla nulla faucibus amet feugiat ultricies. Posuere arcu enim.</p>
            </div>
        </div>
    </section>

    <section class="container about services">
        <div class="bottom">
            <div class="title">
                <h3>Conditions We Treat</h3>
                <div class="learn">
                    <button class="but">LEARN MORE</button>
                </div>
            </div>
            <div class="conditions">
                <div class="condition_left">
                    <div class="condition_list">
                        <h3>Anxiety disorders</h3>
                        <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor
                            vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida
                            placerat viverra purus sed ac ultricies sem nulla.</p>
                    </div>
                    <div class="condition_list">
                        <h3>Post-Traumatic Stress Disorder</h3>
                        <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
                    </div>
                    <div class="condition_list">
                        <h3>Eating disorders</h3>
                        <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla..</p>
                    </div>
                </div>
                <div class="condition_right">
                    <img src="images/Image-3.png.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="container statistic health">
        <div class="top">
            <img src="images/Image-7.png" alt="">
            <div class="sideText">
                <div class="title">
                    <div class="topic">
                        <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                        <p>WHY CHOOSE US</p>
                    </div>
                    <h2>Why Trust Us with Your Mental Health</h2>
                </div>
                <span>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</span>
                <div class="assured">
                    <div class="assured_text">
                        <p>
                            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                            <span>Expert Team of Professionals</span>
                        </p>
                        <p>
                            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                            <span>Personalized Treatment Plans</span>
                        </p>
                        <p>
                            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                            <span>Holistic Approach to Wellness</span>
                        </p>
                        <p>
                            <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' -25, 'opsz' 24;">check</span>
                            <span>Comprehensive Range of Services</span>
                        </p>
                    </div>
                    <div class="learn">
                        <button class="but">GET STARTED TODAY</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container pricingPlan">
        <div class="top">
            <div class="title">
                <div class="topic">
                    <span class="icon material-symbols-outlined sunny" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                    <p>PRICING PLANS</p>
                </div>
                <h2>Affordable Care Packages</h2>
            </div>
            <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
        </div>
        <div class="bottom">
            <div class="planCard">
                <h3>Standard Plan</h3>
                <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
                <div class="amount">
                    <div>$200</div>
                    <small>/month</small>
                </div>
                <small>Service Included:</small>
                <hr>
                <ul>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Sessions: 4 sessions/month</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Duration: 60 minutes</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Individual Therapy</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Features: Online Resources</p>
                    </li>
                </ul>
                <div class="learn">
                    <button class="but">GET STARTED</button>
                </div>
            </div>
            <div class="planCard">
                <h3>Premium Plan</h3>
                <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
                <div class="amount">
                    <div>$500</div>
                    <small>/month</small>
                </div>
                <small>Service Included:</small>
                <hr>
                <ul>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Sessions: Unlimited sessions</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Duration: 60 minutes</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Individual & Group</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Features: 24/7 Support</p>
                    </li>
                </ul>
                <div class="learn">
                    <button class="but">GET STARTED</button>
                </div>
            </div>
            <div class="planCard">
                <h3>Family Plan</h3>
                <p>Vulputate bibendum erat morbi interdumdiam sit. Eu sit dolor vel</p>
                <div class="amount">
                    <div>$600</div>
                    <small>/month</small>
                </div>
                <small>Service Included:</small>
                <hr>
                <ul>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Sessions: 8 sessions/month</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Duration: 90 minutes</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Family & Group</p>
                    </li>
                    <li>
                        <span class="icon check_circle material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' -25, 'opsz' 24;">check_circle</span>
                        <p>Features: Group Workshops</p>
                    </li>
                </ul>
                <div class="learn">
                    <button class="but">GET STARTED</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container stories">
        <div class="top">
            <div class="title">
                <h2>Real Stories, Real Impact</h2>
            </div>
            <div class="learn">
                <button class="but">SEE ALL</button>
            </div>
        </div>
        <div class="bottom mySwiper">
            <div class="cards swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="picText">
                        <p>Sarah Johnson</p>
                        <span>Marketing Manager</span>
                    </div>
                    <img src="images/Image (5).png" alt="">
                    <div class="text">
                        <div class="circle">
                            <span class="icon material-symbols-outlined">play_arrow</span>
                        </div>
                        <h3>Overcoming Anziety and Finding Peace</h3>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="picText">
                        <p>Emily and James Parker</p>
                        <span>Teacher and Graphic Designer</span>
                    </div>
                    <img src="images/Image (4).png" alt="">
                    <div class="text">
                        <div class="circle">
                            <span class="icon material-symbols-outlined">play_arrow</span>
                        </div>
                        <h3>Strengthening Our Relationship</h3>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="picText">
                        <p>Sarah Johnson</p>
                        <span>Marketing Manager</span>
                    </div>
                    <img src="images/Image (5).png" alt="">
                    <div class="text">
                        <div class="circle">
                            <span class="icon material-symbols-outlined">play_arrow</span>
                        </div>
                        <h3>Overcoming Anziety and Finding Peace</h3>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="picText">
                        <p>Emily and James Parker</p>
                        <span>Teacher and Graphic Designer</span>
                    </div>
                    <img src="images/Image (4).png" alt="">
                    <div class="text">
                        <div class="circle">
                            <span class="icon material-symbols-outlined">play_arrow</span>
                        </div>
                        <h3>Strengthening Our Relationship</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container begin">
        <div class="title">
            <div class="topic">
                <span class="icon sunny material-symbols-outlined" style="font-variation-settings: 'FILL' 1, 'wght' 100, 'GRAD' 0, 'opsz' 24;">sunny</span>
                <p>START YOUR JOURNEY</p>
            </div>
            <h2>Begin Your Path to Wellness</h2>
        </div>
        <p>Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
        <div class="learn">
            <button class="start but">SCHEDULE A CONSULTATION</button>
        </div>
        <div class="learn">
            <button class="but">CONTACT US</button>
        </div>
    </section>

    <section class="container footer">
        <div class="top">
            <div class="top_left">
                <h2>MENTAL VERSE</h2>
                <p>Feel free to call us in working hours Mon – fri {8:00 – 16.00}. Our team will be happy to help answer your queries</p>
                <ul class="footer_socials">
                    <li>
                        <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="top_middle">
                <div class="foot_company">
                    <h2>Company</h2>
                    <ul class="footer_menu">
                        <li><a href="index.html" class="nav-link">Home</a></li>
                        <li><a href="message.html" class="nav-link">About us</a></li>
                        <li><a href="#" class="nav-link">Courses</a></li>
                        <li><a href="login.html" class="nav-link">Programs</a></li>
                    </ul>
                </div>
                <div class="foot_service">
                    <h2>Services</h2>
                    <ul class="footer_services">
                        <li>Individual Therapy</li>
                        <li>Group Therapy</li>
                        <li>Family Counseling</li>
                        <li>Couples Counseling</li>
                    </ul>
                </div>

            </div>
            <div class="top_right">
                <p>Subscribe to our newsletter</p>
                <div>
                    <input type="email" placeholder="Enter in your Email" required>
                    <button type="submit" class="but start">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Copyright <span class="material-symbols-outlined">Copyright</span> 2024 </p>
                <p>MentalVerse</p>
            </div>
            <div class="right">
                <p>Terms of Use</p>
                <p>Privacy Policy</p>
            </div>
        </div>
    </section>

    <script src="package/swiper-bundle.js"></script>
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/2a49fbdbb8.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>