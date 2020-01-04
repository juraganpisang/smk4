<?php 
session_start();
include 'koneksi.php';
if (isset($_POST['login']))
{
	$unis = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['password']);
	
$res = mysql_query("SELECT * FROM user WHERE username='$unis'");
$row = mysql_fetch_array($res);

if($row['password'] == $upass)
{
	$_SESSION['username'] = $row['username'];
	$_SESSION['hak_akses'] = $row['hak_akses'];
	
	//Mengatur Tingkatan hak akses akses
	if ($_SESSION['hak_akses'] == 1){
		header("Location:admin.php");
	}else if($_SESSION['hak_akses']==2){
		header("Location: user.php");
	}
}
else{
	?>
	<script>alert('Username / Password anda Salah'); window.location='index.php';</script>
	<?php
}
}
?>