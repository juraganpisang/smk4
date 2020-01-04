<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="../images/logo.png" width="100px"></a>
			<ul>
				<li class="selected">
					<a href="Hotel.php">Hotel</a>
				</li>
				<li>
					<a href="Pemesan.php">Pemesan</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<center>
	<div class="qws"><br>
	<h2>Tambah Hotel</h2>
	<form action="" method="POST">
	<input type="text" name="nama_hotel" placeholder="Nama Hotel" class="grr" required><br>
	<a class="war">Isi dengan Nama Hotel</a><br><br>
	<textarea name="alamat" placeholder="Alamat"class="pog" required></textarea><br>
	<a class="war">Isi dengan Alamat Hotel</a><br><br>
	<input type="text" name="jml_kamar" class="grr" required placeholder="Jumlah Kamar"><br>
	<a class="war">Contoh : 7</a><br><br>
	<textarea name="keterangan" class="pog" placeholder="Keterangan"></textarea><br>
	<a class="war">Misal hotel ini memiliki keindahan yang tiada tara<br><b>Khusus untuk hotel bintang 5*</b></a><br><br>
	<input type="text" name="harga" class="grr" required placeholder="Harga"><br>
	<a class="war">Isi dengan harga. Contoh : 498.328<br>Gunakan titik (.) untuk pemisah</a><br><br>
	<input type="submit" name="tambah" class="kirim" value="Tambah Hotel"><br><br>
	<a href="hotel.php"> << Kembali</a>
	</form>
	</div>
	</center>
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
<?php
	include '../koneksi.php';
	if (isset($_POST['tambah'])) {
		$nama_hotel = htmlentities($_POST['nama_hotel']);
		$alamat = htmlentities($_POST['alamat']);
		$jml_kamar = htmlentities($_POST['jml_kamar']);
		$keterangan = htmlentities($_POST['keterangan']);
		$harga = htmlentities($_POST['harga']);
		
		$shor = ("INSERT INTO tb_hotel (nama_hotel, alamat, jml_kamar, keterangan, harga) VALUES ('$nama_hotel', '$alamat', '$jml_kamar', '$keterangan', '$harga')");
		$haso = mysql_query ($shor);
		if ($haso) {
		?>
			<script>alert('Hotel Berhasil Ditambah')</script>;
		<?php
		} else {
		?>
			<script>alert('Hotel Gagal Ditambah')</script>;
		<?php
			}
		}
?>