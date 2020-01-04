<?php
	session_start () ;
	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}

?>
<html>
<head>
	<title>Tampil</title>
</head>
<script>
		function hapus(no_Barang){
			tanya = confirm("Apakah anda yakin akan menghapus data ini");
			if(tanya == true)
			{
				window.location.href="?method=hapus&no_Barang="+no_Barang;
			}
		}
	</script>
<body>
<h4>Data Barang </h4>
	
	<?php
		error_reporting(0);
		include("connect.php");
		include("edit-isidata.php");
		$tampil="SELECT * from produk";
		$hasil= mysql_query($tampil);
		?>

		<table border=1 cellpadding=5 cellpadding=0 class="d">
		<tr>
			<th>No</th>
			<th>Merk</th>
			<th>Nama Barang</th>
			<th>Size</th>
			<th>Harga</th>
			<th>Nama file foto</th>
			<th>Keterangan</th>
			<th>Deskripsi</th>
			<th>Method</th>
		</tr>

		<?php
		
		while($baris=mysql_fetch_assoc($hasil)){
			$no_Barang = $baris['no_Barang'];
			$merk = $baris['merk'];
			$nama = $baris['nama'];
			$size = $baris['size'];
			$harga = $baris['harga'];
			$nama_file = $baris['nama_file'];
			$keterangan = $baris['keterangan'];
			$deskripsi = $baris['deskripsi'];

			echo "<tr>";
			echo "<td>$no_Barang</td>";
			echo "<td>$merk</td>";
			echo "<td>$nama</td>";
			echo "<td>$size</td>";
			echo "<td>$harga</td>";
			echo "<td>$nama_file</td>";
			echo "<td>$keterangan</td>";
			echo "<td>$deskripsi</td>";
			echo "<td><a href=\"javascript:hapus('".$no_Barang."')\">Delete</a>  | <a href='?method=edit&no_Barang=$no_Barang'>Edit</a></td>";
			echo "</tr>";
		}

		?>
		
</table><br>
<a href="manage.php">Kembali</a><br>
<a href="logout.php">Logout</a>
</body>


</html>