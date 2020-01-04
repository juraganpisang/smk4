<?php
session_start();
include_once 'koneksi.php';
?>
<html>
<head>
	Pendaftaran
</head>
<body>
	<H2>FORM SIGN UP<H2>
	<form action="" method="POST">
	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input type="submit" name="Daftar" value="Daftar" />
<?php
include("koneksi.php");
	if (isset($_POST['Daftar'])){
		$username 		=htmlentities($_POST['username']);
		$password		=htmlentities($_POST['password']);
				
		$sql = "INSERT INTO tb_daftar (username,password) VALUES ('$username','$password')";
		$hasil=mysql_query($sql);
		if ($hasil){
			echo "<script type='text/javascript'> alert('Akun berhasil mendaftar');</script>
				<center><a href=\"index.php\">Login</a></center>";
		}else{
			echo "<script type='text/javascript'> alert('Maaf gagal mendaftar !!!');</script>
				<a href=\"daf.php\">Kembali</a>";
		}
	}
?>
	</form>
</body>
</html>
