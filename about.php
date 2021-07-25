<!DOCTYPE html>
<html lang="en">
<?php 
include ('koneksi.php');
$id_jenis_tanaman=$_GET['id_jenis_tanaman'];
$sql= mysqli_query($con,"SELECT * FROM jenis_tanaman WHERE id_jenis_tanaman='$id_jenis_tanaman'");
$tampil= mysqli_fetch_array($sql);
$id_jenis_tanaman = $tampil['id_jenis_tanaman'];
 $nama_kota   =   $tampil['nama_kota']; 
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Moderna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
        <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li class="drop-down"><a href="">Jenis Tanaman</a>
            <ul>
            <?php 

$sql=mysqli_query($con,"SELECT * FROM jenis_tanaman");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM jenis_tanaman where id_jenis_tanaman like 
  '%$qcari%' or  like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

?> 
              <li><a href="jenis_tanaman1.php?id_jenis_tanaman=<?php echo $row ['id_jenis_tanaman'] ?>""><?php echo $row ['nama'] ?></a></li>
       <?php }?>     
            
            </ul>
          </li>
          <li><a href="admin/index.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Portfolio</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Our Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

         

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <?php
  $sql=mysqli_query($con,"SELECT * FROM jenis_tanaman INNER JOIN tanaman ON tanaman.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman  where jenis_tanaman.id_jenis_tanaman = $id_jenis_tanaman");
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){

      $nomor++;

    ?>
          <div class="col-lg-4 col-md-6 filter-<?php echo $row ['id_jenis_tanaman'];?>">
            <div class="portfolio-item">
              <img src="admin/images/<?php echo $row ['gambar']?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="<?php echo $row['judul']?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $row['judul']?>"><?php echo $row['judul']?></a></h3>
                <div>
                  <a href="<?php echo $row['judul']?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $row['judul']?>"></a>
                  <a href="detail.php?id_tanaman=<?php echo $row['id_tanaman']?>" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>

       

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>