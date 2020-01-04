<?php
session_start();
include_once 'koneksi.php';
error_reporting(0);
if (isset($_POST['masuk'])){
		
		$nip=htmlentities($_POST['nip']);
		$password=htmlentities($_POST['password']);

			
			$hasil = mysql_query("SELECT * FROM pegawai WHERE nip ='$nip' AND password='$password' ");
			$row =mysql_fetch_assoc($hasil);
			if ($row['nip'] ==  $nip AND $row['password']== $password){
				session_start();
				$_SESSION['nip'] = $nip;
				header("location:home.php");
			}else{
				?>
				<script>alert('Tidak bisa masuk karena NIP atau Password Salah')</script>
				<?php
			}
		}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<center>
			<form action="" method="post">
				<div class= "yuu">
					<h2>FORM LOGIN</h2><br>
					<input type="text" name="nip" placeholder="Masukkan NIP" class="oi" required /><br><br>
					<input type="password" name="password" placeholder="Masukkan Password" class="oi" required /><br><br>
					<input type="submit" name="masuk" value="Masuk" class="kirim"><br><br>
					<a class="ui">Belum Punya Akun? <a class="ui" href="register.php">Sign Up</a></a>
				</div>
			</form>
	</center>
</body>
</html>