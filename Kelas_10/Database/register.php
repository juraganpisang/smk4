<!DOCTYPE HTML>
<html>
<head>
	<title>Tambah Data</title>
	<style>
		table {
			background-color : grey;
			margin : auto;
		}
		.a {
			border-radius : 8px;
		}
		.b {
			color : white;
			background-color: black;
		}
	</style>
</head>  
<body>  
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	<table> 
		<center><h2>REGISTER</h2></center>
		<tr>
			<td>Nama</td>     
			<td><input class="a" type="text" name="nama" /></td>   
		</tr>   
		<tr>     
			<td>Username</td>     
			<td><input class="a" type="text" name="username" /></td>   
		</tr>   
		<tr>     
			<td>Password</td>     
			<td><input class="a" type="password" name="password" /></td>   
		</tr>
		<tr>     
			<td>Email</td>     
			<td><input class="a" type="email" name="email" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="b" type="submit" value="Simpan" /></td>
		</tr>
	</table>
</form>   
<?php 
	require_once './koneksi_baru.php';  
	// Jika field nim dan nama diisi lalu disubmit 
	if (isset(
	$_POST['username']) && isset($_POST['password'])) {  
		$nama    = $_POST['nama'];   
		$username   = $_POST['username'];   
		$password = $_POST['password'];
		$email	= $_POST ['email'];
	 // Tambahkan data baru ke tabel   
	 $sql = "INSERT INTO siswa           
			VALUES ('" .$nama. "', '" .$username. "', '" .$password. "', '" .$email. "' )";  
			
	  $res = mysql_query($sql);   
	  if ($res) {     
	  echo 'Data Berhasil Ditambahkan';     
	  mysql_close($res);   
	  } 
	  else {     
	  echo 'Gagal Menambah Data <br />';     
	  echo mysql_error();   }  
	}  
	echo '<hr />'; 
	// Memanfaatkan script pengambilan data untuk 
?>  
</body>
</html>