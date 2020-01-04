<?php
error_reporting(0);
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$no_Barang = $_GET['no_Barang'];
		$qdelete = "DELETE FROM produk WHERE no_Barang ='$no_Barang' ";
		$sql = mysql_query($qdelete);
	}
	if($_GET['method']=='edit')
	{
		$no_Barang = $_GET['no_Barang'];
		
		$baru = mysql_query("SELECT * FROM produk WHERE no_Barang = '$no_Barang'");
		while($row = mysql_fetch_assoc($baru)){
			$no_Barang = $row['no_Barang'];
			$merk = $row['merk'];
			$nama = $row['nama'];
			$size = $row['size'];
			$harga = $row['harga'];
			$nama_file = $row['nama_file'];
			$keterangan = $row['keterangan'];
			$deskripsi = $row['deskripsi'];
			
		?>
		<html>
		<head>
		<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
			<div id="kotak2">
			<form method="POST" action="">
			<span>Update data</span><b><br><br>
				<input type="text" name="merk" placeholder="Merk" class="input1" value="<?php echo $merk; ?>"required/><br><br>
				<input type="text" name="nama" placeholder="Nama Barang" class="input1" value="<?php echo $nama; ?>"required/><br><br>
				<input type="text" name="size" placeholder="Size" class="input1" value="<?php echo $size; ?>"required/><br><br>
				<input type="text" name="harga" placeholder="Rp -" class="input1" value="<?php echo $harga; ?>"></br><br>
				<input type="text" name="keterangan" placeholder="Keterangan" class="input1" value="<?php echo $keterangan; ?>" required/><br><br>	
				<input type="text" name="deskripsi" placeholder="Deskripsi" class="input1" value="<?php echo $deskripsi; ?>" required/><br><br>
				<input type="submit" name="update" value="PERBARUI DATA" />
			</form>
			</div>
		</body>
		</html>
		
		<?php 
		if(isset($_POST['update'])){
			$merk		= htmlentities($_POST['merk']);
			$nama		= htmlentities($_POST['nama']);
			$size 		= htmlentities($_POST['size']);
			$harga		= htmlentities($_POST['harga']);	
			$keterangan = htmlentities($_POST['keterangan']);
			$deskripsi  = htmlentities($_POST['deskripsi']);
			$update = mysql_query("UPDATE produk SET merk='".$merk."', nama='".$nama."',size = '".$size."',harga='".$harga."',keterangan='".$keterangan."',deskripsi='".$deskripsi."' WHERE no_Barang = '$no_Barang'");
			if($update){
				echo"<meta http-equiv='refresh' content='0; url=isidata.php'>";
			}else{
				echo"GAGAL TOTAL";
			}
		}
		}
	}
}
	
		

?>

