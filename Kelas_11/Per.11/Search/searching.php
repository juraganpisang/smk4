<?php
	include ('koneksi.php');
	if (isset($_GET['search'])) {
		$search = $_GET['search'];
		
		//QUERY
		$query = mysql_query("SELECT * FROM tb_siswa WHERE Nama LIKE '%$search%';");
		}
		else {
			$query = mysql_query("SELECT * FROM tb_siswa");
		}
?>
<form method="GET" action="">
search : <input type="text" name="search" value="" />
<input type="submit" name="cari" value="cari" />
<a href="?search=">Bersihkan</a>
</form>
<?php
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>NIS</td>";
	echo "<td>Nama</td>";
	echo "<td>Alamat</td>";
	echo "<td>Telepon</td>";
	echo "<td>Asal Sekolah</td>";
	echo "<td>Rata Rata Rapor</td>";
	echo "<td>Rata Rata UN</td>";
	echo "<tr>";
	
	while ($data = mysql_fetch_array($query)) {
		echo "<tr>";
		echo "<td>".$data['nis']."</td>";
		echo "<td>".$data['Nama']."</td>";
		echo "<td>".$data['Alamat']."</td>";
		echo "<td>".$data['Telepon']."</td>";
		echo "<td>".$data['Asal_Sekolah']."</td>";
		echo "<td>".$data['Rata-Rata_Nilai_Rapor_SMP']."</td>";
		echo "<td>".$data['Rata-Rata_Nilai_UN']."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>