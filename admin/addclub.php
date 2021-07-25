<?php 
session_start();
include('../koneksi.php');
if (isset($_POST['n'])) {
	$id_club		=	$_POST['id_club'];
	$nama_club		=	$_POST['nama_club'];
	$coach			=	$_POST['coach'];
	$since 			= 	$_POST['since'];
	$stadion		=	$_POST['stadion'];
	$liga			=	$_POST['liga'];
	$deskripsi		=	$_POST['deskripsi'];
	$vlampiran		=	$_FILES['gambar']['name'];
	$tlampiran		=	$_FILES['gambar']['tmp_name'];
	$dir			="../images/";
	$sql= mysqli_query($con,"insert into club (id_club,nama_club,coach,since,stadion,liga,deskripsi,gambar) values 
		('','$nama_club','$coach','$since','$stadion','$liga','$deskripsi','$vlampiran')");
	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location:club.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>
