<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM tb_login WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<html>
	<head>
	<title>Tampilan Buku Tamu</title>
			<link rel="stylesheet" href="style.css">
		<script>
		function hapus(id){
			tanya = confirm("Apakah anda yakin akan menghapus data ini");
			if(tanya == true)
			{
				window.location.href="?method=hapus&id="+id;
			}
		}
	</script>
	</head>
	<body>
		<h4 class="e">Daftar Buku Tamu</h4>
<?php
		error_reporting(0);
		include("koneksi.php");
		include("delete.php");
		$tampil="SELECT * from tb_bukutamu";
		$hasil= mysql_query($tampil);
		?>
		
		<table border=1 cellpadding=6 cellpadding=0 class="e">
		<tr>
			<th>Id user</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Komentar</th>
			<th>Method</th>
			<a href="index.php" class="back"><==BACK</a>
		</tr>
		<?php
		
		while($baris=mysql_fetch_assoc($hasil)){
			$id = $baris['id_bukutamu'];
			$nama = $baris['nama'];
			$email = $baris['email'];
			$komentar = $baris['komentar'];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$nama</td>";
			echo "<td>$email</td>";
			echo "<td>$komentar</td>";
			echo "<td><a href=\"javascript:hapus('".$id."')\">Delete</a>  | <a href='?method=edit&id=$id'>Edit</a></td>";
			echo "</tr>";
		}
	
		?>
		<a href="logout.php" class="back">Logout</a>
	</body>
		
</html>