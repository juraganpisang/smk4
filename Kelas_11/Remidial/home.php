<?php
include_once 'koneksi.php';
	session_start();
	if(empty($_SESSION['nip'])){
		header("location:index.php");
	}

?>
<html>
	<head>
	<title>Tampilan Buku Pegawai</title>
			<link rel="stylesheet" href="style.css">
		<script>
		function hapus(nip){
			tanya = confirm("Apakah anda yakin akan menghapus data ini");
			if(tanya == true)
			{
				window.location.href="?method=hapus&nip="+nip;
			}
		}
	</script>
	</head>
	<body>
	<fieldset>
		<h3>Daftar List Pegawai</h3>
		<h4><a href="register.php">+Daftar</a></h4>
		<h4><a href="logout.php">Logout</a></h4>
		<br>
	</fieldset>
	<br>
<?php
		error_reporting(0);
		include("koneksi.php");
		include("delete.php");
		$show = mysql_query("SELECT * FROM pegawai") or die (mysql_error());
		while($row = mysql_fetch_assoc($show)){
		echo '<div class="yuo">';
			$nip = htmlentities($row['nip']);
			$nama = htmlentities($row['nama']);
			$alamat = htmlentities($row['alamat']);
			$telepon = htmlentities($row['telepon']);
			$password = htmlentities($row['password']);
			
			echo "NIP = $nip<br>";
			echo "Nama = $nama<br>";
			echo "Alamat = $alamat<br>";
			echo "No. Telepon = $telepon<br>";
			echo "<a href=\"javascript:hapus('".$nip."')\">Delete</a> | <a href='?method=edit&nip=$nip'>Edit</a><br>";
			echo "<hr>";
		echo '</div>';
		}
	?>
	<br>
	<fieldset>
	<hr>
	Copyright RonaldArrivalF.
	</fieldset>
	</body>	
</html>