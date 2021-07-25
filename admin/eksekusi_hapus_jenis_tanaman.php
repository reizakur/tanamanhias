<?php
session_start();
include "../koneksi.php";

$id_jenis_tanaman = $_GET['id_jenis_tanaman'];

$query = mysqli_query($con,"DELETE FROM jenis_tanaman where id_jenis_tanaman='$id_jenis_tanaman'") or die(mysql_error());
	
if ($query) {

    header('location:jenis_tanaman.php?sucsess');
}
?>