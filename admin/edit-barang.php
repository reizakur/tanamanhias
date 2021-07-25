<html>
<?php
	include('../koneksi.php');
	$id_club = $_GET['id_club'];
	$sql=mysqli_query($con,"SELECT * FROM club WHERE id_club='$id_club'");
$tampil= mysqli_fetch_array($sql);
$id_club = $tampil['id_club'];
	$nama_club = $tampil['nama_club'];
		$coach = $tampil['coach'];
		$since = $tampil['since'];
		$stadion = $tampil['stadion'];


		$liga = $tampil['liga'];
		$gambar = $tampil['gambar'];
		$deskripsi = $tampil['deskripsi'];

?>
<head>
	<title></title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
</head>
<body style="
    background-color: #555;
">
<div class="container">
	<div class="row">
		<div class="colspan-nd-8" style="
    background-color: #65f3f1;
">
		<center><h1>EDIT BARANG</h1></center>
		<form method="post" action="eksekusi_edit_barang.php">
			<table class="table table-bordered" style="margin-top:50px; ">
				<tr style="display:none;">
					<td width="20%">
						ID 	
					</td>
					<td width="1%">
						:
					</td>
					<td>
						<input type="text" name="id_club" value="<?php echo $id_club ?>" class="form-control input-sm" />
					</td>
				</tr>
				<tr>
					<td width="20%">
						NAMA BARANG	
					</td>
					<td width="1%">
						:
					</td>
					<td>
						<input type="text" name="nama_club" value="<?php echo $nama_club ?>" class="form-control input-sm" />
					</td>
				</tr>
				<tr>
					<td width="20%">
						coach
					</td>
					<td width="1%">
						:
					</td>
					<td>
						<input type="text" name="coach" value="<?php echo $coach ?>" class="form-control input-sm" />
					</td>
				</tr>
				<tr>
					<td width="20%">
						stadion	
					</td>
					<td width="1%">
						:
					</td>
					<td>
						<input type="text" name="stadion" value="<?php echo $stadion ?>" class="form-control input-sm" />
					</td>
				</tr>
				<tr>
				<td width="20%">
						since	
					</td>
					<td width="1%">
						:
					</td>
					<td>
						<input type="text" name="since" value="<?php echo $since ?>" class="form-control input-sm" />
					</td>
				</tr>
				<tr>
				<td colspan="3">
						<button type="submit" class="btn btn-primary" name="edit-brand">simpan</button>
						<button type="button"class="btn btn-danger" onclick="javascript: window.location.href='club.php';">kembali</button>
				</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>	
</body>
</html>