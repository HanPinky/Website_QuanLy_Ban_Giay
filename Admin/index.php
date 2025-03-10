<?php

session_start();
$bien_bao_mat = "co";
include("./Connect_DB/connect.php");
$conn = mysqli_connect($servername, $usename, $pass, $dbname);
include("./Function/Manager/Login_confirmation.php");

if (isset($xac_dinh_dang_nhap)) {
  if ($xac_dinh_dang_nhap == "co") {
    include("./Function/Manager/Logout.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quản trị</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" ./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href=" ./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=" ./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href=" ./assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href=" ./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href=" ./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href=" ./assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=" ./assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <div class="container-fluid">
    <?php
    if (!isset($xac_dinh_dang_nhap)) {
      include("./Function/Manager/Login_page.php");
    } else {
      if ($xac_dinh_dang_nhap == "co") {
        include("./Function/Manager/Home_page.php");
      }
    }
    ?>
  </div>
  <?php 
     include("./Function/Manager/Footer.php");
  ?>
  <!-- <footer id="footer" class="footer" class="container-fluid">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer> -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/chart.js/chart.min.js"></script>
  <script src="./assets/vendor/echarts/echarts.min.js"></script>
  <script src="./assets/vendor/quill/quill.min.js"></script>
  <script src="./assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="./assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

</body>


</html>