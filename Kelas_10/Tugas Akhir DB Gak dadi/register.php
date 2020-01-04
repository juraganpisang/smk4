<!DOCTYPE HTML>
<html>
<head>
	<title>Tambah Data</title>
	<link href="css/css.css" rel="stylesheet" type="text/css" />
	<style>
		table {
			background-color :#01BEF2 ;
			margin : auto;
		}
		.a {
			border-radius : 5px;
			width: 235px;
			height: 20px;
		}
		td {
			width: 100px;
		}
		.pu {
			margin-left: 1050px;
		}
	</style>
</head>  
<body>  
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
<header>
<br>
<br>
	<table> 
		<center><h2>REGISTER</h2></center>
		<br>
		<tr>
			<td>Nama</td>     
			<td><input class="a" type="text" name="nama" /></td>   
		</tr>
		<tr>
		</tr>
		<tr>     
			<td>Username</td>     
			<td><input class="a" type="text" name="username" /></td>   
		</tr>
		<tr>
		</tr>		
		<tr>     
			<td>Password</td>     
			<td><input class="a" type="password" name="password" /></td>   
		</tr>
		<tr>
		</tr>
		<tr>     
			<td>Email</td>     
			<td><input class="a" type="email" name="email" /></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td></td>
			<td><input class="d" type="submit" value="Simpan" /></td>
		</tr>
		</header>
	</table>
</form>
<br>
<br>
<footer>
	<a class="pu">Jika sudah membuat<br>
	<i>Silahkan login<a href="auth.php" /> disini</i></a>
	<br>
<?php 
	require_once './koneksi.php';  
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
	echo '<br><hr />'; 
	// Memanfaatkan script pengambilan data untuk 
?>
</footer>
</body>
</html>