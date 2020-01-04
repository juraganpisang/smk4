<?php
	session_start();
?>
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
					<li class="current_page_item"><a href="home.php" accesskey="1" title="">Beranda</a></li>
					<li><a href="artikel1.php" accesskey="2" title="">Artikel</a></li>
					<li><a href="diagnosis1.php" accesskey="3" title="">Diagnosis</a></li>
					<li><a href="logout.php" accesskey="4" title="">Logout*</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
	<div class="title">
		<h2>Diagnosis</h2>
	</div>
	</div>
	<div class="title">	
	<form action="diagnosis2.php" method="POST" name="input" ENCTYPE="Multipart/form-data">
		<center>																																																										
		<table>
				<tr>
				<td><b>Silahkan Diisi</b><br><hr></td>
				</tr>
				<tr>
					<td><label>Nama</label>
					</td><td>:</td><td><input type="text" name="nama" class="yu" required></td>
				</tr>
				<br>
				<tr>
					<td><label>Alamat</label>
					</td><td>: </td><td><textarea name="alamat" class="area"></textarea></td>
				</tr>
				<br>
				<tr>
					<td><label>Umur</label>
					</td><td>:</td><td><input type="text" name="umur" required></td>
				</tr>
				<br>
				<tr>
					<td><label>Jenis Kelamin</label>
					</td><td>: </td><td><br><input type="radio" name="jk" value="Lakilaki" checked>Laki-laki<br>
					<input type="radio" name="jk" value="Perempuan">Perempuan</td>
				</tr>
				<br>
					<td><label>Gejala yang dialami</label>
					</td><td>:</td><td>
					<br>
					<input type="checkbox" name="diag[]" value="Sesak Nafas">Sesak Nafas<br>
					<input type="checkbox" name="diag[]" value="Nyeri pada bagian dada sebelah kiri">Nyeri Pada Bagian Dada Sebelah Kiri<br>
					<input type="checkbox" name="diag[]" value="Denyut jantung tidak teratur">Denyut Jantung Tidak Teratur<br>
					<input type="checkbox" name="diag[]" value="Bagian Tubuh Kebiru-biruan">Bagian Tubuh Kebiru-biruan<br>
					<input type="checkbox" name="diag[]" value="Keringat Dingin">Keringat Dingin<br>
					<input type="checkbox" name="diag[]" value="Pembakaran Dalam Rongga Dada">Pembakaran Dalam Rongga Dada<br>
					<input type="checkbox" name="diag[]" value="Jantung Berdebar-debar">Jantung Berdebar-debar<br>
					<input type="checkbox" name="diag[]" value="Pusing">Pusing<br>
					<input type="checkbox" name="diag[]" value="Pembengkakan pada Kaki">Pembengkakan pada Kaki<br>
					<input type="checkbox" name="diag[]" value="Aritmia">Aritmia<br>
					<input type="checkbox" name="diag[]" value="Nyeri pada Bagian Dada Tengah">Nyeri pada Bagian Dada Tengah<br>
					<input type="checkbox" name="diag[]" value="Berkeringat">Berkeringat<br>
					<input type="checkbox" name="diag[]" value="Sakit Kepala Parah">Sakit Kepala Parah<br>
					<input type="checkbox" name="diag[]" value="Nafas yang pendek">Nafas yang pendek<br>
					<input type="checkbox" name="diag[]" value="Mudah Lelah">Mudah Lelah<br>
		</table>
		<input type="submit" name="kirim1" value="KIRIM" class="hus"><br><br>
		</center>
	</form>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="">AmazingSlide</a> | Design by <a href="">AmazingSlide</a>.</p>		<ul class="contact">
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