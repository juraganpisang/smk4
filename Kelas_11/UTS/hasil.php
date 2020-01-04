	<?php
		include 'koneksi.php';
		include 'update.php';
	?>
	 <script>
		function hapus(id){
			tanya = confirm("apakah anda yakin akan menghapus data ini");
			if(tanya== true)
			{
				window.location.href="?method=hapus&nis="+nis;
			}
		}
	</script>
	<body>
	<H1>Hasil Data Siswa</h1>
	<?php
		echo "<a href='logout.php'>LOGOUT</a>";
	?>
	<br><br>
	</body>
<?php
	$show = mysql_query("SELECT * FROM tb_siswa") or die (mysql_error());
	while($row = mysql_fetch_assoc($show)){
		$nis 		=htmlentities($row['nis']);
		$nama		=htmlentities($row['Nama']);
		$alamat		=htmlentities($row['Alamat']);
		$telepon	=htmlentities($row['Telepon']);
		$asal		=htmlentities($row['Asal_Sekolah']);
		$ratasmp	=htmlentities($row['Rata-Rata_Nilai_Rapor_SMP']);
		$rataun		=htmlentities($row['Rata-Rata_Nilai_UN']);
		
		echo "Nis = $nis<br>";
		echo "Nama = $nama<br>";
		echo "Alamat = $alamat<br>";
		echo "No.Telepon = $telepon<br>";
		echo "Asal Sekolah = $asal<br>";
		echo "Nilai Rata Rata SMP = $ratasmp<br>";
		echo "Nilai Rata Rata UN = $rataun<br>";
		echo "<a href=\"javascript:hapus('".$nis."')\">Delete</a> | <a href='?method=edit&nis=$nis'>Edit</a>";
		echo "<hr>";
		}
?>