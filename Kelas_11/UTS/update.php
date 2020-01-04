<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$id = $_GET['id'];
		$delete = "DELETE FROM tb_siswa WHERE id ='$id' ";
		$sql = mysql_query($delete);
	}
	if($_GET['method']=='edit')
	{
		$id = $_GET['id'];
		
		$baru = mysql_query("SELECT * FROM tb_siswa WHERE id = '$id'");
		while($row = mysql_fetch_assoc($baru)){
		$nis 		=htmlentities($row['nis']);
		$nama		=htmlentities($row['Nama']);
		$alamat		=htmlentities($row['Alamat']);
		$telepon	=htmlentities($row['Telepon']);
		$asal		=htmlentities($row['Asal_Sekolah']);
		$ratasmp	=htmlentities($row['Rata-Rata_Nilai_Rapor_SMP']);
		$rataun		=htmlentities($row['Rata-Rata_Nilai_UN']);
			
		?>
<html>
	<head>
	FORM UPDATE
	</head>
<body>
	<form action="" method="POST" name="input">
	<br><br><br><br><br><br><br>
		<center>
		<fieldset>
		<h2>Pengisian Ulang Buku Tamu</h2>	
		<form action="" method="POST">
		<input type="text" name="nis" placeholder="NIS" required />
		<input type="text" name="nama" placeholder="Nama" required />
		<input type="text" name="alamat" placeholder="Alamat" required />
		<input type="text" name="telepon" placeholder="Telepon" required />
		<input type="text" name="asal" placeholder="Asal Sekolah" required />
		<input type="text" name="ratasmp" placeholder="Rata Rata Nilai Rapor SMP" required />
		<input type="text" name="rataun" placeholder="Rata Rata Nilai UN" required />
		<input type="submit" name="update" value="Update" required  />
		</form>
		</fieldset>
		<br><br><br><br><br><br><br>
		</center>
</body>
</html>
<?php 
	if(isset($_POST['update'])){
		$nis 		=htmlentities($row['nis']);
		$nama		=htmlentities($row['Nama']);
		$alamat		=htmlentities($row['Alamat']);
		$telepon	=htmlentities($row['Telepon']);
		$asal		=htmlentities($row['Asal_Sekolah']);
		$ratasmp	=htmlentities($row['Rata-Rata_Nilai_Rapor_SMP']);
		$rataun		=htmlentities($row['Rata-Rata_Nilai_UN']);
		$update = mysql_query("UPDATE tb_siswa SET Nis='$nis', Nama='$nama', Alamat='$alamat', Telepon='$telepon', Asal_Sekolah='$asal', Rata-Rata_Nilai_SMP='ratasmp', Rata-Rata_Nilai_UN='rataun' WHERE id = '$id'");
		if($update){
			echo"<meta http-equiv='refresh' content='0; url=hasil.php'>";
		}else{
			echo"GAGAL TOTAL";
		}
	}
	}
}		
}
?>
