<?php 
session_start();
include('../koneksi.php');
if (isset($_POST['n'])) {
	$nama		=	$_POST['nama'];

	$sql= mysqli_query($con,"insert into pelatih (nama) values 
		('$nama')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
	move_uploaded_file($tlampiran, $upload);
	if($sql==true) {
		header("Location:pelatih.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>


