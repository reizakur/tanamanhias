<?php
session_start();
include "../koneksi.php";

$id_club = $_GET['id_club'];

$query = mysqli_query($con,"DELETE FROM club where id_club='$id_club'") or die(mysql_error());
	
if ($query) {

    header('location:club.php?sucsess');
}
?>