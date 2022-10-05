<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/letter-r1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.9.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  
  <!-- ======= Navbar ======= -->
  <?php include_once 'navbar.php'; ?>
  <!-- Navbar -->

  <!-- ======= Home Section ======= -->
  <?php include_once 'home.php'; ?>
  <!-- End Home -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include_once 'about.php'; ?>
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <?php include_once 'study.php'; ?>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php include_once 'tasks.php'; ?>
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <?php include_once 'portfolio.php'; ?>
    <!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <?php include_once 'portfolio-detail.php'; ?>
    <!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <?php include_once 'contact.php'; ?>
    <!-- End Contact Section -->
    
    <?php
    //tangkap request halaman di url
    $hal = $_REQUEST['hal'];
    if(!empty($hal)){
      include_once $hal.'.php';
    }
    else{
      include_once 'home.php';
    }
    ?>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once 'footer.php'; ?>
  <!-- End Footer -->

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>