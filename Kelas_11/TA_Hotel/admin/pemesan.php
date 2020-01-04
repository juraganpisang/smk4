<?php
	include '../koneksi.php';
	//QUERY
	$query = mysql_query("SELECT * FROM tb_pemesanan LIMIT $offset, $max");
?>
<?php
	include 'config_pemesan.php';
?>
<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<script>
		function hapus(id){
			tanya = confirm("Apakah anda yakin akan menghapus hotel ini?");
			if(tanya == true)
			{
				window.location.href="?method=hapus&id="+id;
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
				<li>
					<a href="Hotel.php">Hotel</a>
				</li>
				<li class="selected">
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
		error_reporting(0);
		include("../koneksi.php");
		while($row = mysql_fetch_assoc($query)){
		echo '<div class="yio">';
			$id = $row['id'];
			$nama = $row['nama'];
			$no_telp = $row['no_telp'];
			$email = $row['email'];
			$hotel_dipesan = $row['hotel_dipesan'];
			$check_in = $row['check_in'];
			$check_out = $row['check_out'];
			$jml_kamar = $row['jml_kamar'];
			$permintaan_khusus = $row['permintaan_khusus'];
			
			echo "<hr>";
			echo "<a class='fon'>Id. $id<br>";
			echo "<b>Nama : $nama<br>";
			echo "No Telp : $no_telp<br>";
			echo "Email : $email<br>";
			echo "Hotel yang Dipesan : $hotel_dipesan<br>";
			echo "Check In : $check_in<br>";
			echo "Check Out : $check_out<br>";
			echo "Jumlah Kamar : $jml_kamar<br>";
			echo "Permintaan Khusus : $permintaan_khusus<br><br></b></a>";
			echo "<a href=\"javascript:hapus('".$id."')\">Hapus</a>";
			echo "<hr>";
		echo '</div>';
		}
?>
<?php	
	include '../koneksi.php';
	//Paging Query
	$pageQuery = mysql_query("SELECT COUNT(*) as total FROM tb_pemesanan");
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