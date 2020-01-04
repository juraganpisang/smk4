<?php
	include ('koneksi.php');
	
		//QUERY
		$query = mysql_query("SELECT * FROM tb_siswa LIMIT $offset, $max");
?>
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
<?php
	//Paging Query
	$pageQuery = mysql_query("SELECT COUNT(*) as total FROM tb_siswa");
	$jumlah = mysql_fetch_assoc($pageQuery);
	
	//TOTAL PAGE
	$totalPage = ceil($jumlah['total'] / $max);
	
	//Prev Link
	if ($page>1) {
		echo "<a href='?page=".($page-1)."'>Prev</a>";
	}
	
	//Pages Link
	for ($i = 1; $i<=$totalPage; $i++) {
		if($i == $page) {
			echo "<b>$i</b>";
		}
		else {
			echo "<a href='?page=$i'>$i</a>";
		}
	}
	//NEXT Link
	if ($page < $totalPage) {
		echo "<a href='?page=".($page+1)."'>Next</a>";
		}
?>