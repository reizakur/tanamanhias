 <?php
	
	include('../koneksi.php');
	//-----------------------//
	if (isset($_POST['edit-brand'])) {
		$id_club = $_POST['id_club'];
		$nama_club = $_POST['nama_club'];
		$coach = $_POST['coach'];
		$since = $_POST['since'];
		$stadion = $_POST['stadion'];
		
	$query= mysqli_query($con,"UPDATE club SET id_club ='$id_club',
	nama_club = '$nama_club',
	coach = '$coach',
	since = '$since',
	stadion = '$stadion'
	WHERE id_club='$id_club'") or die (mysql_error());			
	
	if ($query) {
		header("Location: club.php?success");
	}
	}
	
?>
