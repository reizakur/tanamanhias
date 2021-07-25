<?php
session_start();
include "../koneksi.php";

$id_komentar = $_GET['id_komentar'];

$query = mysqli_query($con,"DELETE FROM komentar where id_komentar='$id_komentar'") or die(mysql_error());
	
if ($query) {

    header('location:komentar.php?sucsess');
}
?>