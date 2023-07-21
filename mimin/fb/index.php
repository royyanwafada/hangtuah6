<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganti Facebook</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- JS Prevent unwanted characers-->
    <script src="../prevent.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ganti Link Facebook</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Ganti Link Facebook</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="action.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <!-- checking old number on database -->
                      <?php
                      include "../../assets/config/db.php";
                      $query = mysqli_query($koneksi, "select component from sosial_media where id='FB'");
                      $result = mysqli_fetch_array($query);
                      ?>

                      <label for="FbLama">Saat Ini</label>
                      <input type="text" class="form-control" id="FbLama" placeholder="" value="<?php echo $result[0]; ?>" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label for="FbBaru">Baru</label>
                      <input type="text" class="form-control" id="FbBaru" name="FbBaru" placeholder="Enter link" maxlength="600" required="required">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

              </div>
              <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>


  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>