<?php 
session_start();
include('../koneksi.php');
if (isset($_POST['n'])) {
	$judul		=	$_POST['judul'];
	$deskripsi 			= 	$_POST['deskripsi'];
	$id_jenis_tanaman		=	$_POST['id_jenis_tanaman'];
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="images/";
	$sql= mysqli_query($con,"insert into tanaman (judul,deskripsi,id_jenis_tanaman,gambar) values 
		('$judul','$deskripsi','$id_jenis_tanaman','$vlampiran')");
	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location:tanaman.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
