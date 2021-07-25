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

    <title>RAtanaman</title>

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


  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/froala_editor.css">
  <link rel="stylesheet" href="../css/froala_style.css">
  <link rel="stylesheet" href="../css/plugins/code_view.css">
  <link rel="stylesheet" href="../css/plugins/colors.css">
  <link rel="stylesheet" href="../css/plugins/emoticons.css">
  <link rel="stylesheet" href="../css/plugins/image_manager.css">
  <link rel="stylesheet" href="../css/plugins/image.css">
  <link rel="stylesheet" href="../css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../css/plugins/table.css">
  <link rel="stylesheet" href="../css/plugins/char_counter.css">
  <link rel="stylesheet" href="../css/plugins/video.css">
  <link rel="stylesheet" href="../css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../css/plugins/file.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
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
                    Tanaman Hias A&A
                </a>
            </div>

               <ul class="nav">
                     <li class="active">
                    <a href="tanaman.php">
                        <i class="pe-7s-ball"></i>
                        <p style="
    margin-right: 70px;
">UPDATE TANAMAN</p>
                    </a>
                </li> 
                 <li>
                <a href="jenis_tanaman.php">
                        <i class="pe-7s-id"></i>
                        <p style="
    margin-right: 54px;
">TAMBAH JENIS</p>
                    </a>
                </li>
               <li>
                <a href="komentar.php">
                        <i class="pe-7s-id"></i>
                        <p>DATA KOMENTAR</p>
                    </a>
                </li>
                <li><a href="../index.php">
                        <i class="pe-7s-back"></i>
                        <p style="
    margin-right: 112px;
">KELUAR</p>
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
                        <div class="card " >
                            <div class="header" method="">
                                <h4 class="title">Tambah tanaman</h4>
                            </div>
                            <div class="content">
                              <form method="post" action="addtanaman.php" enctype="multipart/form-data">
                               
 <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Tanaman:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="judul" placeholder="Password">
    </div>
  </div>
   <div class="form-group">
                                                <label>Pilih Jenis</label>
                                          <select class="content" name="id_jenis_tanaman" style="
    margin-left: 60px;
">
                                      <?php
                                $query = "SELECT id_jenis_tanaman, nama FROM jenis_tanaman ORDER BY nama";
                                $sql = mysqli_query ($con,$query);
                                while ($hasil = mysqli_fetch_array ($sql)) {
                                echo "<option value='$hasil[id_jenis_tanaman]'>$hasil[nama]</option>";
                                }
                                ?></select>

                                </div>
    
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Logo tanaman</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="gambar" placeholder="Password">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsikan :</label></div>
                                           <div id="editor">
    <textarea id='edit' name="deskripsi" style="margin-top: 30px;" >
      
    </textarea> 
                                                </td>
                                            </tr>
                                            <p> </p>
                                            <button type="submit" name="n" class="btn btn-info btn-fill" >KIRIM</button></form>
                                            <script >
                                                
                                                CKEDITOR.replace('deskripsi');
                                            </script>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                 
                            </div>

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
 <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../js/plugins/fullscreen.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Selamat Datang Admin <b>RAtanaman</b>"

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>
    <script>
    (function () {
      new FroalaEditor("#edit", {
        pastePlain: true
      })
    })()
  </script>
</html>