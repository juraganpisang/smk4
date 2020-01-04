<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<script>
window.onload = function()
{
	var hasil;
	hasil = 'Halaman Ini Khusus Admin';
	alert(hasil)
}
</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="../index.php" id="logo"><img src="../images/logo.png" width="100px"></a>
			<ul>
				<li>
					<a href="../index.php">Beranda</a>
				</li>
				<li>
					<a href="../user/rekomendasi.php">Rekomendasi</a>
				</li>
				<li>
					<a href="../user/opsional.php">Opsional</a>
				</li>
				<li>
					<a href="../user/pemesanan.php">Pemesanan</a>
				</li>
				<li class="selected">
					<a href="loginadmin.php">Login Admin*</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="contact">
		<h3>Halaman Ini Hanya Buat Admin!</h3>
		</br></br></br></br></br></br></br></br></br></br>
		<center>
		<fieldset class="asd">
		</br></br></br></br>
		<form action="" method="POST">
		<input type="password" name="kode" placeholder="Masukkan Kode ID" class="login" required></input><br><br>
		<input type="text" name="username" placeholder="Masukkan Username" class="login" required></input><br><br>
		<input type="password" name="password" placeholder="Masukkan Password" class="login" required></input><br><br>
		<input type="submit" name="login" value="Login" class="kirim">
		</form>
		</br></br></br></br>
		</fieldset>
		</center>
	</div>
	<div id="footer">
		<div>
			<p>
				&#169; 2015 XI RPL B.
			</p>
			<div class="connect">
				<a href="" id="googleplus">google+</a> <a href="" id="contact">contact</a> <a href="" id="facebook">facebook</a> <a href="" id="twitter">twitter</a>			</div>
		</div>
	</div>
</body>
</html>
<?php 
	include "../koneksi.php";
	
	if (isset($_POST['login'])){
		
		$kode=htmlentities($_POST['kode']);
		$username=htmlentities($_POST['username']);
		$password=htmlentities($_POST['password']);

			
			$hasil = mysql_query("SELECT * FROM tb_admin WHERE kode ='$kode' AND username ='$username' AND password='$password' ");
			$row =mysql_fetch_assoc($hasil);
			if ($row['kode']== $kode AND $row['username'] ==  $username AND $row['password']== $password){
				session_start();
				$_SESSION['username'] = $username;
			?>
				<script>alert('Anda Berhasil Login Mr.Ronald');
				window.location="admin.php"</script>
			<?php
			}else{
			?>
				<script>alert('Maaf Kode atau Username atau Password Anda Salah');</script>
			<?php
			}
		}
?>