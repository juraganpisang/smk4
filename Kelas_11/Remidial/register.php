<?php
include_once 'koneksi.php';

if(isset($_POST['daftar']))
{
	$nip = mysql_real_escape_string($_POST['nip']);
	$nama = mysql_real_escape_string($_POST['nama']);
	$alamat = mysql_real_escape_string($_POST['alamat']);
	$telepon = mysql_real_escape_string($_POST['telepon']);
	$password = mysql_real_escape_string($_POST['password']);
	
	if(mysql_query("INSERT INTO pegawai(nip, nama, alamat, telepon, password) VALUES('$nip','$nama','$alamat','$telepon','$password')"))
	{
		?>
        <script>alert('REGISTER BERHASIL !!! ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('REGISTER GAGAL !!');</script>
        <?php
	}
}
?>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<center>
			<form action="" method="post">
				<div class="yt">
					<h2>FORM PENDAFTARAN</h2><br>
					<input type="text" name="nip" placeholder="Masukkan NIP" class="io" required></input></br><br>
					<input type="text" name="nama" placeholder="Masukkan Nama" class="io" required></input></br><br>
					<input type="text" name="alamat" placeholder="Masukkan Alamat" class="io" required></input></br><br>
					<input type="text" name="telepon" placeholder="Masukkan No. Telepon" class="io" required></input></br><br>
					<input type="password" name="password" placeholder="Masukkan Password" class="io" required></input></br><br>
					<input type="submit" name="daftar" value="Daftar" class="kirim"/>
					<input type="submit" name="reset" value="Reset" class="gagal" /><br><br><br>
					<a class="ui">Sudah Punya Akun? <a class="ui" href="index.php">Sign In</a></a>
				</div>
			</form>
	</center>
</body>
</html>