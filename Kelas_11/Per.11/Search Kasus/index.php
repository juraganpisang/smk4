<?php
	include 'koneksi.php';
?>
	<form method="GET" action="">
		search : <input type="text" name="search" value="" />
		<input type="submit" name="cari" value="cari" />
		<a href="?search=">Bersihkan</a>
	</form>
<?PHP
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>NIS</td>";
	echo "<td>Nama</td>";
	echo "<td>Alamat</td>";
	echo "<td>Telepon</td>";
	echo "<td>Asal Sekolah</td>";
	echo "<td>Rata Rata Rapor</td>";
	echo "<td>Rata Rata UN</td>";
	echo "</tr>";
	
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

		//query

		$pageQuery = mysql_query("select count(*) as total from tb_siswa where Nama like '%$search%'");
		$jumlah = mysql_fetch_assoc($pageQuery);

		$totalPage = ceil($jumlah['total'] / $max);

		//prev link
		if ( $page > 1) {
			echo "<a href='?page=".($page-1)."&search=$search'>Prev</a>";

		}

		//page link
		for ( $i = 1; $i <= $totalPage; $i++ ) {
			if ($i == $page ){
				echo "<b> $i </b>";

			}else{
				echo "<a href='?page=$i&search=$search'>$i</a>";
			}
		}

		//next link
		if ( $page < $totalPage){
			echo "<a href='?page=".($page+1)."&search=$search'>Next</a>";
		}
	?>