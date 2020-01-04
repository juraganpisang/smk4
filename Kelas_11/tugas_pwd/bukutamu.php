<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM tb_login WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css">
	<?php
	include("koneksi.php");
	?>
	</head>
	<body class="">
		<form action="" method="POST" name="input">
		<fieldset class="login">
		<h2 class="">Form Buku Tamu</h2><br>
		Nama : <input type="text" name="nama" class="login-input" required></input></br><br>
		Email : <input type="email" name="email" class="login-input" required></input></br><br>
		Komentar : <textarea input type="text" name="komentar" class="login-input" reqiured></textarea></br><br>
		<input type="submit" name="submit" value="SUBMIT" class="login-submit">
		</input><input type="submit" class="login-submit" name="reset" value="RESET" class="login-submit"></input>
		<a href="home.php" class="login-submit">DAFTAR BUKU TAMU ==></a><br>
		<hr>
		Copyright 2015.<br>
		Privacy Policy | Terms of Use
		</fieldset>
		</form><br>
	
	</body>

	<?php
		if (isset($_POST['submit'])){
		$nama =htmlentities($_POST['nama']);
		$email =htmlentities($_POST['email']);
		$komentar =htmlentities($_POST['komentar']);
		$input="INSERT INTO tb_bukutamu (nama,email,komentar)VALUES('$nama','$email','$komentar')";
		$hasil=mysql_query($input);
			if($hasil){
				echo '<script>alert("Data berhasil dinput");window.location ="home.php"</script>';
				
			}
			else{
			echo '<script>alert("Data GAGAL dinput");window.location ="index.php"</script>';
			}
		}
	?>
	
</html>