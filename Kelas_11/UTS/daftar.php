<?php
session_start();
include_once 'koneksi.php';
?>
<html>
<head>
	Pendaftaran Siswa
</head>
<body>
	<H2>FORM SISWA<H2>
	<h3>Silahkan Masukkan Data</h3>
	<form action="" method="POST">
	<input type="text" name="nis" placeholder="NIS" required />
	<input type="text" name="nama" placeholder="Nama" required />
	<input type="text" name="alamat" placeholder="Alamat" required />
	<input type="text" name="telepon" placeholder="Telepon" required />
	<input type="text" name="asal" placeholder="Asal Sekolah" required />
	<input type="text" name="ratasmp" placeholder="Rata Rata Nilai Rapor SMP" required />
	<input type="text" name="rataun" placeholder="Rata Rata Nilai UN" required />
	<input type="submit" name="Inputkan" value="Inputkan">
	</form>
</body>
</html>
<?php
include("koneksi.php");
if(isset($_POST['Inputkan'])){
		$nis	 	=htmlentities($_POST['nis']);
		$nama		=htmlentities($_POST['nama']);
		$alamat		=htmlentities($_POST['alamat']);
		$telepon	=htmlentities($_POST['telepon']);
		$asal		=htmlentities($_POST['asal']);
		$ratasmp	=htmlentities($_POST['ratasmp']);
		$rataun		=htmlentities($_POST['rataun']);
				
		$sql = "INSERT INTO tb_siswa VALUES ('$nis','$nama','$alamat','$telepon','$asal','$ratasmp','$rataun')";
		$hasil=mysql_query($sql);
		if ($hasil){
			echo "<script type='text/javascript'> alert('Data berhasil diinputkan');</script>
				<center><a href=\"hasil.php\">Lihat Hasil</a></center>";
		}else{
			echo "<script type='text/javascript'> alert('Maaf data gagal diinputkan');</script>";
		}
	}
?>