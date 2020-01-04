<html>
	<head>
		<meta charset="utf-8">
	<title></title>
	<?php
		include 'koneksi.php';
	?>
	 <script>
		function hapus(id){
			tanya = confirm("apakah anda yakin akan menghapus data ini");
			if(tanya== true)
			{
				window.location.href="?method=hapus&id="+id;
			}
		}
	</script>
<?php
	if(isset($_POST['update']))
		{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];
		$update = mysql_query("UPDATE tb_bukutamu SET nama = '".$nama."',email = '".$email."',komentar = '".$komentar."'WHERE id_tamu = '".$id."'");
			if($update)
			{
			echo"<meta http-equiv='refresh' content='0; url=list.php'>";
			}
			else{
			echo "GAGAL TOTAL";
			}
			}
?>
</head>
<body>
		<h1>BUKU TAMU
		<br><small>Memasukkan Data : <a href="index.php">Disini</a></small></h1>
		<?php

		//SINTAK UNTUK MENAMPILKAN DATA DI DATABASE
		$show = mysql_query("SELECT * FROM tb_bukutamu") or die (mysql_error());
		while($row = mysql_fetch_assoc($show)){
			$id = $row['id_tamu'];
			$nama = $row['nama'];
			$email = $row['email'];
			$komentar = $row['komentar'];
			
			echo "id = $id<br>";
			echo "nama = $nama<br>";
			echo "email = $email<br>";
			echo "komentar = $komentar<br>";
			echo "<a href=\"javascript:hapus('".$id."')\">Delete</a> | <a href='?method=edit&id=$id'>Edit</a>";
			echo "<hr>";
		}
	?>
</body>
</html>