<?php
session_start();
include('../koneksi.php'); 

if (isset($_SESSION['level']))
{
    if ($_SESSION['level'] == "adm")

       header('location:tambahbrand.php');
   {   

}
if (!isset($_SESSION['level']))
{
    header('location:../index.php');
}
}
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />   <link rel="icon" type="image/png" href="../img/logowb tm.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Tanaman Hias A&A</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

 <script src="../js/jquery.js"></script>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

               <div class="sidebar-wrapper" style="
    background-color: black;
">
            <div class="logo">
                <a href="#" class="simple-text">
                   TANAMAN HIAS A&A
                </a>
            </div>

               <ul class="nav">
                     <li>
                    <a href="tanaman.php">
                        <i class="pe-7s-ball"></i>
                        <p>TAMBAH TANAMAN</p>
                    </a>
                </li>
                <li> 
                <a href="pelatih.php">
                        <i class="pe-7s-id"></i>
                        <p>TAMBAH JENIS</p>
                    </a>
                </li>
                <li>
                <li  class="active">
                <a href="komentar.php">
                        <i class="pe-7s-id"></i>
                        <p>DATA KOMENTAR</p>
                    </a>
                </li>
                  <li>
                <a href="../index.php">
                        <i class="pe-7s-back"></i>
                        <p>KELUAR</p>
                    </a>
                </li>            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HALAMAN ADMIN</a>
                </div>
                <div class="collapse navbar-collapse" style="
    background-color: black;
">
        
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="../index.php">
                               <p>Keluar</p>
                            </a>
                        </li>
                        
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">
            
                  
    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Data Komentar  :</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                        
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                    </thead>
                                    <tbody>
                                                                         <?php 

$sql=mysqli_query($con,"SELECT * FROM komentar");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM komentar where id_komentar like 
  '%$qcari%' or jenis like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

  echo"<tr>";?>
                        <td><?php echo $nomor;?></td>
                        <td><?php echo $row ['nama'];?></td>
                        <td><?php echo $row['komentar'] ?></td> <td>        <a href='eksekusi_hapus_komentar.php?id_komentar=<?php echo $row['id_komentar']?>' class='btn btn-danger'><span class='fa fa-trash fa-1x'> Hapus
                                               <?php }?> 
                                                  </a></td>
                                        </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

              <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                 
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.instagram/reizakur">MR.Manchunian</a>, Website Toko Online
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Selamat Datang Admin <b>Manchunian</b>"

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>
</html>