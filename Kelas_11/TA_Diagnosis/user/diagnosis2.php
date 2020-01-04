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
<?php
include '../koneksi.php';
error_reporting(0);
	
	if (isset($_POST["kirim1"]))
	{
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$jk = $_POST['jk'];
		$gejala = $_POST['diag'];
// print_r($gejala) ;

		foreach ($gejala as $key => $hasil) {
		$query = "INSERT INTO tb_diagnosis (nama, alamat, umur, jk, gejala) VALUES ('$nama','$alamat','$umur','$jk','$hasil')";
			mysql_query($query) or die(mysql_error());	
		}
		
	}
?>
<center>
<div class='ret'>
<?php
	require_once("../koneksi.php");

$result=mysql_query('SELECT * FROM tb_diagnosis ORDER BY no DESC');
$row=mysql_fetch_row($result);
echo "	Nama : $row[1]<br><br>
		Alamat : $row[2]<br><br>
		Umur : $row[3] tahun<br><br>
		Jenis Kelamin : $row[4]<br><br>";
?>
<?php
echo "<h4>Kemungkinan Penyakit Anda : </h4><br>";
include '../koneksi.php';
if (isset($_POST['diag'])) {
		$kirim = $_POST['diag'];
		
		$quer = mysql_query("SELECT * FROM tb_artikel WHERE kategori LIKE '%$kirim%';");
		}
		else {
			$quer = mysql_query("SELECT * FROM tb_artikel");
		}
?>
<?php
	while($hus = mysql_fetch_array($quer)){
	echo "<b>".$hus['judul']."</b> <i>yaitu :</i><br>";
	echo $hus['artikel']."<br><br>";
	}
?>
</div>
</center>
</div>
</div>