<?php
	include '../koneksi.php';
	//QUERY
	$query = mysql_query("SELECT * FROM tb_hotel LIMIT $offset, $max");
?>
<?php
	include 'config_hotel.php';
?>
<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<script>
		function hapus(no){
			tanya = confirm("Apakah anda yakin akan menghapus hotel ini?");
			if(tanya == true)
			{
				window.location.href="?method=hapus&no="+no;
			}
		}
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="../images/logo.png" width="100px"></a>
			<ul>
				<li>
					<a href="admin.php">Home</a>
				</li>
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
	<br>
<?php
	echo "<center>";
	echo "<h2><a href='tambah.php'>+Tambah Data</a></h2>";
	echo "<table border=1 class='fg'>";
	echo "<tr>";
	echo "<td class='no'><center>No</center></td>";
	echo "<td class='vb'><center>Nama Hotel</center></td>";
	echo "<td class='vb'><center>Alamat</center></td>";
	echo "<td class='jml'><center>Jumlah Kamar</center></td>";
	echo "<td class='cf'><center>Keterangan</center></td>";
	echo "<td class='hrg'><center>Harga</center></td>";
	echo "<td class='no'><center>Banyak Pemesan</center></td>";
	echo "<td class='con'><center>Config</center></td>";
	echo "<tr>";

	while ($data = mysql_fetch_array($query)) {
		$no = $data['no'];
		echo "<tr>";
		echo "<td><center>".$data['no']."</center></td>";
		echo "<td><center>".$data['nama_hotel']."</center></td>";
		echo "<td><center>".$data['alamat']."</center></td>";
		echo "<td><center>".$data['jml_kamar']."</center></td>";
		echo "<td><center>".$data['keterangan']."</center></td>";
		echo "<td><center>IDR ".$data['harga']."</center></td>";
		echo "<td><center>".$data['banyak_pemesan']."</center></td>";
		echo "<td><center><a href=\"javascript:hapus('".$no."')\">Hapus</a>\t || \t<a href='?method=edit&no=$no'>Edit</a></center></td>";
		echo "</tr>";
	}
	echo "</table><br><br>";
	echo "</center>";
?>
<?php	
	include '../koneksi.php';
	//Paging Query
	$pageQuery = mysql_query("SELECT COUNT(*) as total FROM tb_hotel");
	$jumlah = mysql_fetch_assoc($pageQuery);
	
	//TOTAL PAGE
	$totalPage = ceil($jumlah['total'] / $max);
	
	//Prev Link
	echo "<center>";
	if ($page>1) {
		echo "<a href='?page=".($page-1)."'> Prev </a>";
	}
	
	//Pages Link
	for ($i = 1; $i<=$totalPage; $i++) {
		if($i == $page) {
			echo "<b> $i </b>";
		}
		else {
			echo "<a href='?page=$i'> $i </a>";
		}
	}
	//NEXT Link
	if ($page < $totalPage) {
		echo "<a href='?page=".($page+1)."'> Next </a><br>";
		}
	echo "<br><br><br></center>";
?>