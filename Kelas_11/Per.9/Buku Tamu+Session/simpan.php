<html>
<style>
	.re {
		background : grey;
	}
	.we {
		background : white;
		height : 300px;
		width : 300px;
		margin-top : 200px;
		margin-left : 500px;
	}
</style>
<head>
<body class="re">
<fieldset class="we">
<?php
	include ("koneksi.php");
	if (isset ($_POST['kirim'])){
	$nama = htmlentities($_POST ['nama']);
	$email = htmlentities($_POST ['email']);
	$komentar = htmlentities($_POST ['komentar']);
	
	$sql= "INSERT INTO tb_bukutamu (Nama,Email,Komentar) VALUES ('$nama','$email','$komentar')";
	$hasil=mysql_query ($sql);
	if ($hasil) {
		echo "<center><h2>BUKU TAMU SUDAH TERISI</h2></center><br>
			  <center><h3><br><br><br><a href=\"DAFTAR.php\">Lihat list Buku tamu</a></center></h3>";
	} else {
		echo "<center><h2>BUKU TAMU GAGAL TERISI</h2></center><br>";
		}
	}
?>
</fieldset>
</body>
</head>
</html>