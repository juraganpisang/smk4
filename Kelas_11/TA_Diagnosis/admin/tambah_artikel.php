<!DOCTYPE html>
<html>
<head>
<title>Healtcare</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="../images/logoes.png" width="300px">
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="indexadmin.php" accesskey="1" title="">Beranda</a></li>
					<li><a href="data_user.php" accesskey="2" title="">Data User</a></li>
					<li><a href="data_artikel.php" accesskey="3" title="">Data Artikel</a></li>
					<li><a href="data_diagnosis.php" accesskey="4" title="">Data Diagnosis</a></li>
					<li><a href="logout.php" accesskey="5" title="">Logout*</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
	<center>
	<h3>HALAMAN TAMBAH ARTIKEL</h3>
	<BR>
	<form action="" method="POST">
	JUDUL ARTIKEL<br>
	<input type="text" name="judul" placeholder="JUDUL ARTIKEL" class="uj" required><br><br>
	ISI DARI ARTIKEL<br>
	<textarea name="artikel" placeholder="ISI ARTIKEL" class="uhj" required></textarea><br><br>
	KATEGORI ARTIKEL<br>
	<input type="text" name="kategori" class="uj" placeholder="KATEGORI PENYAKIT" required><br>
	Contoh : sakit kepala, sesak nafas dll.<br><br>
	<input type="submit" name="tambah" value="Tambah Data"><br><br>
	<a href="data_artikel.php">< < Kembali</a>
	</form>
	</center>
	</div>
	</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="">AmazingSlide</a> | Design by <a href="">AmazingSlide</a>.</p>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
</body>
</html>
<?php
	include '../koneksi.php';
	if (isset($_POST['tambah'])){
		$judul = htmlentities($_POST['judul']);
		$artikel = htmlentities($_POST['artikel']);
		$kategori = htmlentities($_POST['kategori']);
		
		$input = ("INSERT INTO tb_artikel (judul, artikel, kategori) VALUES ('$judul','$artikel','$kategori')");
		$sql = mysql_query($input);
		if ($sql) {
			echo "<script>alert('Artikel Berhasil Ditambah');</script>";
		}else{
			echo "<script>alert('Artikel Gagal Ditambah');</script>";
		}
	}
?>