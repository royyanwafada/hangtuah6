<!doctype html>
<html class="no-js" lang="zxx">

<?php 
    include "../bar.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News & Article | SMP Hang Tuah 6 Excellent</title>
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
                                <h2>News & Article</h2>
                                <p>Students and Teachers activity</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Hero area End -->
        <!-- Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <?php
                            //query mengambil data artikel lalu di looping sesuai jumlah banyaknya artikel
                            $query = mysqli_query($koneksi, "select * from artikel order by datetime DESC");
                            $c = 1; //untuk ditampilkan pada recent article
                            while ($artikel = mysqli_fetch_array($query)) {
                            ?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?php echo $artikel[3]; $recent_post[$c][2] = $artikel[3]; ?>" alt="">
                                        <a href="#" class="blog_item_date">
                                            <!-- Menampilkan angka-->
                                            <h3><?php echo date_format(date_create($artikel[2]), "d"); $recent_post[$c][0] = $artikel[2]; ?></h3>
                                            
                                            <!-- Menampilkan bulan-->
                                            <p><?php echo date_format(date_create($artikel[2]), "M"); ?></p>
                                        </a>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="detail.php?id=<?php echo $artikel[0]; ?>"> <!-- Link Detail Artikel by ID-->
                                            <!-- Judul Artikel, Font Bold/Hijau-->
                                            <h2 class="blog-head" style="color: #2d2d2d;"> <?php echo $artikel[1]; $recent_post[$c][1] = $artikel[1]; ?></h2>
                                        </a>
                                        <p><?php echo $artikel[5]; ?></p>
                                        <ul class="blog-info-link">
                                            <!-- Nama Akun yg Upload Berita -->
                                            <li><a href="#"><i class="fa fa-user"></i><?php echo $artikel[9]; ?></a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                                        </ul>
                                    </div>
                                </article>

                            <?php 
                            // looping untuk recent article
                            $c = $c + 1;
                            } 

                            ?>
                            </article>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Keyword">
                                            <div class="input-group-append d-flex">
                                                <button class="boxed-btn2" type="button">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>

                                <ul class="list cat-list">
                                    <?php
                                    $query2 = mysqli_query($koneksi, "select tag, count(*) tag from artikel group by tag");
                                    while ($artikel2 = mysqli_fetch_array($query2)) {
                                    ?>
                                        <li>
                                            <a href="#" class="d-flex">
                                                <p><?php echo $artikel2[0]; ?></p>
                                                <p>(<?php echo $artikel2[1]; ?>)</p>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                <?php //ambil data dari looping mysqli fetch array article yang diinsert ke var array
                                for ($i = 1; $i < $c; $i++) {
                                ?>
                                    <div class="media post_item">
                                        <img src="<?php echo $recent_post[$i][2]; ?>" alt="post" width="80" height="75">
                                        <div class="media-body">
                                            <a href="blog_details.html">
                                                <!-- Judul -->
                                                <h3 style="color: #2d2d2d;"><?php echo $recent_post[$i][1]; ?></h3>
                                            </a>

                                            <!-- Format Tanggal-->
                                            <p><?php echo date_format(date_create($recent_post[$i][0]), "d-M-Y H:i"); ?></p>
                                        </div>
                                    </div> <?php } ?>

                            </aside>

                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title" style="color: #2d2d2d;">Gallery Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_5.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_6.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_7.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_8.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_9.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="../assets/img/post/post_10.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
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