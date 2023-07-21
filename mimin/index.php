<?php
include "../assets/config/db.php";
session_start();
$user_id = $_SESSION['id_user'];
if (!isset($_SESSION['id_user'])) {
  header('Location: ../auth/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | SMP Hang Tuah 6 Excellent</title>
  <link rel="icon" type="image/x-icon" href="../assets/img/icon/iconht6.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
  * layout-fixed
-->

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search Line Code Here -->

        <!-- Messages Dropdown Menu Line Code Here -->

        <!-- Notifications Dropdown Menu Line Code Here -->

        <!-- Button Fullscreen Line Code Here -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

        <!-- Button Control Sidebar Line Code Here -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar end -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../assets/img/icon/iconht6.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Website</span>
      </a>

      <!-- Sidebar -->
      <?php
      $display_name = mysqli_fetch_array(mysqli_query($koneksi, "select displayname from user where id_user = '$user_id'"));
      ?>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $display_name[0]; ?></a>
            <a href="../auth/">Logout</a>

          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">Informasi Website</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Media Sosial
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="wa/" class="nav-link">
                    <i class="far ion-social-whatsapp nav-icon"></i>
                    <p>WA Business</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="telp/" class="nav-link">
                    <i class="far ion-ios-telephone nav-icon"></i>
                    <p>Telepon</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="fb/" class="nav-link">
                    <i class="far ion-social-facebook nav-icon"></i>
                    <p>Facebook</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far ion-social-instagram-outline nav-icon"></i>
                    <p>Instagram</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far ion-social-youtube nav-icon"></i>
                    <p>Youtube Channel</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Bagian Bawah
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far ion-social-youtube nav-icon"></i>
                    <p>Ganti Video</p>
                  </a>
                </li>
              </ul>
            </li>

            
            <li class="nav-header">Berita dan Artikel</li>

            <li class="nav-item">
              <a href="beritadanartikel/listartikel/" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  List Artikel
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="beritadanartikel/buatartikelbaru/" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Buat Artikel Baru <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="beritadanartikel/gallery/" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>Gallery</p>
                </a>
            </li>

            <!-- <li class="nav-header">AKUN</li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon far fa-log-out" aria-hidden="true"></i>
                <p>Logout</p>
              </a>
            </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
      <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
        <div class="nav-item dropdown">
          <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
          <div class="dropdown-menu mt-0">
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
          </div>
        </div>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
      </div>
      <div class="tab-content">
        <div class="tab-empty">
          <h2 class="display-4">Selamat Datang, <?php echo $display_name[0]; ?> !</h2>
        </div>
        <div class="tab-loading">
          <div>
            <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#">SMP Hang Tuah 6 Excellent</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>