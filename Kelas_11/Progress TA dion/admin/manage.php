<?php
	session_start () ;
	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<?php
	include("connect.php");
?>
<body>
<div id="kotak2">
<form method="POST" action="" enctype="multipart/form-data">
<span>Tambah data</span><b><br><br>
	<input type="text" name="merk" placeholder="Merk" class="input1" required/><br><br>
	<input type="text" name="nama" placeholder="Nama Barang" class="input1" required/><br><br>
	<input type="text" name="size" placeholder="Size" class="input1" required/><br><br>
	<input type="text" name="harga" placeholder="Rp -" class="input1"></br><br>
	<input type="text" name="keterangan" placeholder="Keterangan" class="input1" required/><br><br>
	<input type="text" name="deskripsi" placeholder="Deskripsi" class="input1" required/><br><br>
	<a class="input3">PILIH GAMBAR : </a>
	<input type="file" name="file"></br><br>	
	<input type="submit" name="add" value="TAMBAH DATA" />
</form>
</div>
<div id="kotak3">
<a href="isidata.php" class="kotak3">Lihat Isi data</a><br><br>
<a href="logout.php" class="kotak3">Logout</a>
</div>
<?php
require_once("connect.php");
if(isset($_POST['add'])){
	$merk		= $_POST['merk'];
	$nama		= $_POST['nama'];
	$size 		= $_POST['size'];
	$harga		= $_POST['harga'];	
	$keterangan = $_POST['keterangan'];
	$deskripsi	= $_POST['deskripsi'];
	$file_name	= $_FILES['file']['name'];
	$lokasi 	= 'images/';
	$file_ext	= strtolower(end(explode('.', $file_name)));
	$file_tmp	= $_FILES['file']['tmp_name'];
	$move 		= move_uploaded_file($file_tmp, $lokasi.$nama.'.'.$file_ext);
	$input 		= mysql_query("INSERT INTO produk VALUES(NULL ,'$merk','$nama','$size', '$harga' , '$nama.$file_ext', '$keterangan', 'deskripsi')") or die(mysql_error());	
	if ($input){
		echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>
		";
	}else{
		echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
		echo '<script>window.history.back()</script>';
	}
}
?>
</body>
</html>