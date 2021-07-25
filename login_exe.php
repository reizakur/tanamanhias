<?php 
include ('koneksi.php');
if(isset($_POST['login'])) {
	$uname = $_POST['username'];
	$pass = MD5($_POST['password']);
	$sql = mysqli_query($con, "select * from user where username='$uname' && password='$pass'");
	$data = mysqli_fetch_array($sql);
	$row = mysqli_num_rows($sql);

	if($row>0){
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['akses'] = $data['akses'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['username'] = $data['username'];

$id=$_SESSION['id_user'];
	mysqli_query($con,"UPDATE user SET status='Online' where id_user=$id");


	$Online = mysqli_query ($con,"UPDATE user SET status = 'Online' WHERE username = '$uname'");/*ini buat online ofline*/


		if($data['akses']=='adm'){
			header('Location: admin/tanaman.php');
	
		}elseif($data['akses']=='usr'){
			header('Location: examples/dashboard.php');
		}


	
}else{
	header('Location: index.php');
} }
?>