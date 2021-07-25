<?php 
session_start();
include('koneksi.php');
if (isset($_POST['komen'])) {
	$nama		=	$_POST['nama'];
	$komentar		=	$_POST['komentar'];
	$id_tanaman		=	$_POST['id_tanaman'];
	$sql= mysqli_query($con,"insert into komentar (nama,komentar,id_tanaman) values 
		('$nama','$komentar','$id_tanaman')");
	$go=mysqli_query($con,$sql);
	if($sql==true) {
		header("Location:detail.php?id_tanaman=$id_tanaman");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


