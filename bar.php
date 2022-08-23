<?php
include "assets/config/db.php";

$query = mysqli_query($koneksi, "select component from sosial_media where id='WA'");
$wa = mysqli_fetch_array($query);



$domain = "http://localhost/hangtuah6/";

$icon = "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"" . $domain . "assets/img/icon/iconht6.png\">";

$countdown =
    "
<div class=\"main-header \">
    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"d-flex justify-content-center flex-wrap align-items-center\">
                        <div class=\"header-info-left\">
                        <ul>
                            <li><span>SEGERA BERAKHIR :</span> Penerimaan Peserta Didik Baru</li>
                        </ul>
                        </div>

                        <div class=\"header-info-right d-flex align-items-center\">
                            <div class=\"cd-timer\" id=\"countdown\">
                                <div class=\"cd-item\">
                                    <span>40</span>
                                        <p>Days</p>
                                </div>
                                <div class=\"cd-item\">
                                    <span>18</span>
                                    <p>Hours</p>
                                </div>
                                <div class=\"cd-item\">
                                    <span>46</span>
                                    <p>Minutes</p>
                                </div>
                                <div class=\"cd-item\">
                                    <span>32</span>
                                    <p>Seconds</p>
                                </div>
                            </div>

                        <a href=\"#\" class=\"browse-btn browse-btn2 ml-40 d-none d-sm-block\">Info Detail</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";

$head = "
<meta charset=\"utf-8\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"" . $domain . "assets/img/icon/ht6.png\">
<link rel=\"stylesheet\" href=\"" . $domain . "assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.css%2bnice-select.css.pagespeed\" />
<link rel=\"stylesheet\" href=\"" . $domain . "assets/css/A.style.css.pagespeed.cf.ihVIXitPqH.css\">
<link rel=\"stylesheet\" href=\"" . $domain . "assets/css/app.css\">
";


$logoatas = "
<div class=\"logo\">
    <a href=\"" . $domain . "index.php\"><img src=\"" . $domain . "assets/img/logo/logoht6.png\" alt=\"\"></a>
</div>
";

$menubar = "                   
    <div class=\"main-menu d-none d-lg-block\">
        <nav>
            <ul id=\"navigation\">
                <li><a href=\"" . $domain . "\">Home</a></li>
                <li><a href=\"#\">About Us</a>
                    <ul class=\"submenu\">
                        <li><a href=\"" . $domain . "profil/\">Visi, Misi & Sejarah</a></li>
                        <li><a href=\"" . $domain . "guru-staff/\">Teachers and Staff</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Student</a>
                    <ul class=\"submenu\">
                        <li><a href=\"" . $domain . "infrastructure/\">News & Article</a></li>
                        <li><a href=\"#\">OSIS</a></li>
                        <li><a href=\"#\">Extracurricular</a></li>
                        <li><a href=\"#\">Profil Alumni</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Facilities</a>
                    <ul class=\"submenu\">
                        <li><a href=\"" . $domain . "infrastructure/\">Infrastructure</a></li>
                        <li><a href=\"#\">E-learning</a></li>
                        <li><a href=\"#\">E-library</a></li>
                    </ul>
                <li><a href=\"" . $domain . "ppdb/\">PPDB</a></li>
                <li><a href=\"contact.html\">Gallery</a></li>
                <li><a href=\"" . $domain . "contact/\">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class=\"header-right-btn d-flex f-right align-items-center\">
    <a href=\"https://wa.me/" . $wa[0] . "?text=Halo\" class=\"header-btn2 d-none d-xl-inline-block\">WA:<span> +" . $wa[0] . "</span></a>
    <!--<ul class=\"header-social d-none d-sm-block\">
        <li><a href=\"https://www.facebook.com/smphangtuah6excellent/\"><i class=\"fab fa-facebook-square\"></i></a></li>
        <li><a href=\"https://twitter.com/smphangtuah6exc\"><i class=\"fab fa-twitter-square\"></i></a></li>
        <li><a href=\"https://youtube.com/channel/UCre1rjdTOA0GycySQCLloTg\"><i class=\"fab fa-youtube-square\"></i></a></li>
        <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
        <li><a href=\"#\"><i class=\"fas fa-envelope\"></i></a></li>
    </ul>-->
</div>
";

$footer =
    "
<footer>
        <div class=\"footer-wrapper gray-bg\">
            <div class=\"footer-area footer-padding\">
                <div class=\"container\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col-xl-2 col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"single-footer-caption mb-20\">
                                    <div class=\"footer-logo mb-35\">
                                        <a href=\"index.html\"><img height=100% width=210px src=\"" . $domain . "assets/img/logo/logobawah.png\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-8 col-sm-10\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle mb-10\">
                                    <h4>SMP Hangtuah 6 Excellent Juanda Sidoarjo</h4>
                                    <p>Jalan Raya Ir. H.Juanda No.9, Dukuh, Sedati Agung, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253.</p>
                                    <a href=\"tel:+623199681417\">Telepon: (031) 99681417</a></br>
                                    <a href=\"https://wa.me/" . $wa[0] . "?text=Halo\">WhatsApp: +" . $wa[0] . "
                                </div>

                                <!--<div class=\"footer-form mb-20\">
                                    <div id=\"mc_embed_signup\">
                                        <form target=\"_blank\"
                                            action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                            class=\"subscribe_form relative mail_part\">
                                            <input type=\"email\" name=\"email\" id=\"newsletter-form-email\"
                                                placeholder=\"Enter your email\" class=\"placeholder hide-on-focus\">
                                            <div class=\"form-icon\">
                                                <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                                    class=\"email_icon newsletter-submit button-contactForm\">
                                                    <img src=\"assets/img/icon/Icon-send.svg\" alt=\"\">
                                                </button>
                                            </div>
                                            <div class=\"mt-10 info\"></div>
                                        </form>
                                    </div>
                                </div>-->

                                <div class=\"footer-social mt-30\">
                                    <a href=\"https://wa.me/6285163006904?text=Halo%20Assalamualaikum\"><i class=\"ti-tablet\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                                    <a href=\"https://instagram.com/smphangtuah6excellent\"><i class=\"fab fa-instagram\"></i></a>
                                    <!--<a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>-->
                                    <a href=\"https://www.youtube.com/channel/UCre1rjdTOA0GycySQCLloTg\"><i class=\"fab fa-youtube\"></i></a></br>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <!--<div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href=\"#\">Work</a></li>
                                        <li><a href=\"#\">Services</a></li>
                                        <li><a href=\"#\">Products</a></li>
                                        <li><a href=\"#\">Tips & Tricks</a></li>
                                    </ul>
                                </div>
                            </div>-->
                            
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <!--<div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Programs</h4>
                                    <ul>
                                        <li><a href=\"#\">Air freight</a></li>
                                        <li><a href=\"#\">Ocean freight</a></li>
                                        <li><a href=\"#\">Large projects</a></li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>4 Excellent Program</h4>
                                    <ul>
                                        <li><a href=\"#\">Excellent Hafiz</a></li>
                                        <li><a href=\"#\">Excellent Science</a></li>
                                        <li><a href=\"#\">Excellent English Club</a></li>
                                        <li><a href=\"#\">Excellent Graphic Design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    <iframe height=\"360\" src=\"https://www.youtube.com/embed/tqxxqM0GhD8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class=\"footer-bottom-area\">
                <div class=\"container\">
                    <div class=\"footer-border\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 \">
                                <div class=\"footer-copy-right text-center\">
                                    <p>Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> SMP Hangtuah 6 Excellent | All rights reserved <i class=\"fa fa-heart color-danger\" aria-hidden=\"true\"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

";
