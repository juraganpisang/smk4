<html>
	<head>
		<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/CSS" href="css/global.css">
	<?php
		include 'koneksi.php';
		include 'method.php';
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
</head>
<body>
		<h1>BUKU TAMU
		<br><small>Memasukkan Data : <a href="index.php">Disini</a></small></h1>
		<?php

		//SINTAK UNTUK MENAMPILKAN DATA DI DATABASE
		$show = mysql_query("SELECT * FROM tb_bukutamu") or die (mysql_error());
		while($row = mysql_fetch_assoc($show)){
			$id = $row['id_bukutamu'];
			$nama = $row['nama'];
			$email = $row['email'];
			$komentar = $row['komentar'];

			echo "nama = $nama<br>";
			echo "email = $email<br>";
			echo "komentar = $komentar<br>";
			echo "<a href=\"javascript:hapus('".$id."')\">Delete</a> | <a href='?method=edit&id=$id'>Edit</a>";
			echo "<hr>";
		}
	?>
</body>
</html>