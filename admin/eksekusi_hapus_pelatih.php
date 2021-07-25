<?php
session_start();
include "../koneksi.php";

$id_pelatih = $_GET['id_pelatih'];

$query = mysqli_query($con,"DELETE FROM pelatih where id_pelatih='$id_pelatih'") or die(mysql_error());
	
if ($query) {

    header('location:pelatih.php?sucsess');
}
?>