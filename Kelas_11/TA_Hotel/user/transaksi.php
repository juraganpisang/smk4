<html>
<head>
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<?php
	session_start();
	if(isset($_GET['nama'])){
	$nama = $_GET['nama'];
	?>
</head>
<body class="bod">
	<center>
		<div class="about">
		<form action="" method="POST">
		<div class="ier">
			<h2 class="hrt">Nama Bank</h2><hr><br>
			<input type="text" name="bank" class="grrr" required /><br>
			<a class="war">Contoh : BCA, BRI, Mandiri dll</a><br><br><br>
			<h2 class="hrt">No.Rekening Anda</h2><hr><br>
			<input type="text" name="norek" class="grrr" required /><br>
			<a class="war">Contoh : 1523424xxxx</a><br><br><br>
			<input type="submit" name="kir" class="kirim" value="Kirim" /><br><br>
			<a href="keluar.php" class="pesss">< < KEMBALI</a>
		</div>
		</form>
		</div>
	</center>
</body>
</html>
<?php
	include '../koneksi.php';
	
	if(isset($_POST['kir'])) {
		$bank=htmlentities($_POST['bank']);
		$norek = htmlentities($_POST['norek']);
		
		$masuk = ("UPDATE tb_pemesanan SET nama_bank='$bank', no_rekening='$norek' WHERE nama='$nama'");
		$hasil = mysql_query($masuk);
		
		if($hasil){
			echo "<script>alert('Sudah Selesai');window.location='../hasil.php';</script>";
		}
		else {
			echo "<script>alert('Gagal')</script>";
		}
	}
	}
?>