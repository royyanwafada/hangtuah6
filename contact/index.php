<!doctype html>
<html class="no-js" lang="zxx">
<?php include "../bar.php";
include "../assets/config/db.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us | SMP Hang Tuah 6 Excellent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $icon; ?>

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-area">
            <!-- <div class="main-header ">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-center flex-wrap align-items-center">
                                    <div class="header-info-left">
                                        <ul>     
                                            <li><span>ENDS TOMORROW:</span> Join Teachable for $4,800 in bonus content</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                       
                                        <div class="cd-timer" id="countdown">
                                            <div class="cd-item">
                                                <span>40</span>
                                                <p>Days</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>18</span>
                                                <p>Hours</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>46</span>
                                                <p>Minutes</p>
                                            </div>
                                            <div class="cd-item">
                                                <span>32</span>
                                                <p>Seconds</p>
                                            </div>
                                        </div>
                                       
                                        <a href="#" class="browse-btn browse-btn2 ml-40 d-none d-sm-block">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">
                        <!-- Logo -->
                        <div class="left-side d-flex align-items-center">
                            <?php echo $logoatas; ?>
                            <!-- Main-menu -->
                            <?php echo $menubar; ?>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <!-- Hero area Start-->
        <div class="slider-area">
            <div class="slider-height2 slider-bg2 d-flex hero-overly align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-caption hero-caption2">
                                <h2>Contact Us</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Hero area End -->
        <!-- Hero Area End-->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="d-sm-block mb-5 pb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7467901945092!2d112.76293561472333!3d-7.382248494673237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e5ec6cd9ba47%3A0x2059ede1aac92a50!2sSMP%20Hang%20Tuah%206%20Excellent!5e0!3m2!1sid!2sid!4v1635568627901!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="button-group-area mt-40">
                        <h3 class="text-heading">Informasi lebih lanjut, anda dapat menghubungi kami melalui:</h3>
                        <a href="https://wa.me/<?php echo $wa[0]; ?>?text=Halo%20Assalamualaikum,%20mohon%20informasi%20detail%20tentang%20PPDB" class="genric-btn primary radius">WA Business Helpdesk</a>
                        <a href="https://chat.whatsapp.com/JkUojZGuTKF8sZjyRqqRoI" class="genric-btn success radius">Join Group WA Info PPDB 2022/2023</a>

                        <!-- <a href="#" class="genric-btn info radius">Info</a>
                            <a href="#" class="genric-btn warning radius">Warning</a>
                            <a href="#" class="genric-btn danger radius">Danger</a>
                            <a href="#" class="genric-btn link radius">Link</a>
                            <a href="#" class="genric-btn disable radius">Disable</a> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="https://preview.colorlib.com/theme/universityedu/contact_process.php" method="post" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Kab. Sidoarjo, Jawa Timur.</h3>
                                <p>Jalan Ir. H. Juanda No. 9</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>(+6231) 99681417</h3>
                                <p>Helpdesk Office Phone</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>
                                    <a href="#" class="__cf_email__" data-cfemail="60131510100f121420030f0c0f120c09024e030f0d">smphangtuah6excjuanda@gmail.com</a>
                                </h3>
                                <p>Send us your email anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
    <?php echo $footer; ?>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    </div>

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav , Counter-->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/countdown.min.js"></script>

    <!--wow , counter , waypoint, Nice-select -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!--  Plugins, main-Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>