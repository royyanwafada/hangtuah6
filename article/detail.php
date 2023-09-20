<!doctype html>
<html class="no-js" lang="zxx">

<?php 
include "../bar.php";
$id_artikel = $_GET['id'];

if (!isset($_GET['id'])) {
  header('Location: index.php');
}

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News & Article | SMP Hang Tuah 6 Excellent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon/iconht6.png">

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
                    <div class="logo">
                        <a href="../"><img src="../assets/img/logo/logoht6.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation\">
                                        <li><a href="../">Home</a></li>
                                        <li><a href="#">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="../profil">Visi, Misi & Sejarah</a></li>
                                                <li><a href="../guru-staff/">Teachers and Staff</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Student</a>
                                            <ul class="submenu">
                                                <li><a href="../article/">News & Article</a></li>
                                                <li><a href="#">OSIS</a></li>
                                                <li><a href="#">Extracurricular</a></li>
                                                <li><a href="#">Profil Alumni</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Facilities</a>
                                            <ul class="submenu">
                                                <li><a href="../infrastructure/">Infrastructure</a></li>
                                                <li><a href="#">E-learning</a></li>
                                                <li><a href="#">E-library</a></li>
                                            </ul>
                                        <li><a href="../ppdb/">PPDB</a></li>
                                        <li><a href="../contact.html">Gallery</a></li>
                                        <li><a href="../contact/">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right-btn d-flex f-right align-items-center\">
                            <a href="https://wa.me/<?php echo $wa[0];?>?text=Halo Admin" class="header-btn2 d-none d-xl-inline-block">WA: <span>+<?php echo $wa[0];?></span></a>
                            <!--<ul class=\"header-social d-none d-sm-block\">
                                <li><a href=\"https://www.facebook.com/smphangtuah6excellent/\"><i class=\"fab fa-facebook-square\"></i></a></li>
                                <li><a href=\"https://twitter.com/smphangtuah6exc\"><i class=\"fab fa-twitter-square\"></i></a></li>
                                <li><a href=\"https://youtube.com/channel/UCre1rjdTOA0GycySQCLloTg\"><i class=\"fab fa-youtube-square\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fas fa-envelope\"></i></a></li>
                            </ul>-->
                        </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
  </header>
  <main>
    <!-- Hero area Start-->
    <div class="slider-area">
      <!-- <div class="slider-height2 slider-bg2 d-flex hero-overly align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
              <div class="hero-caption hero-caption2">
                <h2>Blog Details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse varius enim in eros elementum tristique.</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <!--  Hero area End -->
    <!-- Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="single-post">

              <?php $artikel = mysqli_fetch_array(mysqli_query($koneksi, "select * from artikel where id_artikel = '$id_artikel'"));?>
              
                <div class="feature-img">
                  <img class="img-fluid" src="../mimin/beritadanartikel/images/<?php echo $artikel[3];?>" alt="">
                </div>
                <div class="blog_details">
                  <h2 style="color: #2d2d2d;"> <?php echo $artikel[1]; ?>
                  </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $artikel[6]; ?> </a></li>
                    <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                  </ul>
                  <p class="excert">
                    <?php echo $artikel[4]; ?>
                  </p>
                  <!-- <div class="quote-wrapper">
                  <div class="quotes">
                    MCSE
                  </div>
                </div> -->
                  
                </div>
            </div>
          <!-- <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
              <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                people like this</p>
              <div class="col-sm-4 text-center my-2 my-sm-0">
              </div>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
            <div class="navigation-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="../assets/img/post/preview.jpg" alt="">
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="lnr text-white ti-arrow-left"></span>
                    </a>
                  </div>
                  <div class="detials">
                    <p>Prev Post</p>
                    <a href="#">
                      <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                  <div class="detials">
                    <p>Next Post</p>
                    <a href="#">
                      <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="lnr text-white ti-arrow-right"></span>
                    </a>
                  </div>
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="../assets/img/post/next.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="comments-area">
            <h4>0 Comments</h4>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="../assets/img/blog/comment_1.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="../assets/img/blog/comment_2.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="../assets/img/blog/comment_3.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="#" id="commentForm">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
              </div>
            </form>
          </div> -->
          </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <!-- <aside class="single_sidebar_widget search_widget">
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
              </aside> -->
              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                <ul class="list cat-list">
                  <?php
                  $query2 = mysqli_query($koneksi, "select tag, count(*) tag from artikel group by tag");
                  while ($kategori = mysqli_fetch_array($query2)) {
                  ?>
                    <li>
                      <a href="#" class="d-flex">
                        <p><?php echo $kategori[0]; ?></p>
                        <p>(<?php echo $kategori[1]; ?>)</p>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </aside>

              <aside class="single_sidebar_widget popular_post_widget">

                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                <?php
                $query = mysqli_query($koneksi, "select * from artikel order by datetime DESC LIMIT 3");
                while ($recent = mysqli_fetch_array($query)) {
                ?>
                  <div class="media post_item">
                    <img src="../mimin/beritadanartikel/images/<?php echo $recent[3]; ?>" alt="post" width="80" height="75">
                    <div class="media-body">
                      <a href="#">
                        <h3 style="color: #2d2d2d;"><?php echo $recent[1]; ?></h3>
                      </a>
                      <p><?php echo date_format(date_create($recent[2]), "d-M-Y H:i"); ?></p>
                    </div>
                  </div>
                  <!-- <div class="media post_item">
                  <img src="../assets/img/post/post_2.jpg" alt="post">
                  <div class="media-body">
                    <a href="blog_details.html">
                      <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                    </a>
                    <p>02 Hours ago</p>
                  </div>
                </div>
                <div class="media post_item">
                  <img src="../assets/img/post/post_3.jpg" alt="post">
                  <div class="media-body">
                    <a href="blog_details.html">
                      <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                    </a>
                    <p>03 Hours ago</p>
                  </div>
                </div>
                <div class="media post_item">
                  <img src="../assets/img/post/post_4.jpg" alt="post">
                  <div class="media-body">
                    <a href="blog_details.html">
                      <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                    </a>
                    <p>01 Hours ago</p>
                  </div>
                </div> -->
                <?php } ?>
              </aside>
              <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                <ul class="list">
                  <li>
                    <a href="#">project</a>
                  </li>
                  <li>
                    <a href="#">love</a>
                  </li>
                  <li>
                    <a href="#">technology</a>
                  </li>
                  <li>
                    <a href="#">travel</a>
                  </li>
                  <li>
                    <a href="#">restaurant</a>
                  </li>
                  <li>
                    <a href="#">life style</a>
                  </li>
                  <li>
                    <a href="#">design</a>
                  </li>
                  <li>
                    <a href="#">illustration</a>
                  </li>
                </ul>
              </aside> -->
              <!-- <aside class="single_sidebar_widget instagram_feeds">
                <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
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
              </aside> -->
              <!-- <aside class="single_sidebar_widget newsletter_widget">
                <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                <form action="#">
                  <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                  </div>
                  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                </form>
              </aside> -->
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