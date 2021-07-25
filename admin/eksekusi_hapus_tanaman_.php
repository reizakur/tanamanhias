<?php
session_start();
include "../koneksi.php";

$id_tanaman = $_GET['id_tanaman'];

$query = mysqli_query($con,"DELETE FROM tanaman where id_tanaman='$id_tanaman'") or die(mysql_error());
	
if ($query) {

    header('location:tanaman.php?sucsess');
}
?>