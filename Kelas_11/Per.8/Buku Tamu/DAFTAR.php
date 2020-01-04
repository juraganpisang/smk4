<html>
<style>
	.re {
		background : grey;
	}
	.we {
		background : white;
	}
	.tr {
		background : white;
	}
</style>
	<?php
		include 'koneksi.php';
		include 'delete.php';
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
<body class="re">
<fieldset class="tr">
<br><br><br>
		<h1><center>BUKU TAMU
		<br>Entry Data : <a href="index.php">Disini</a></center></h1>
		<br><br><br>
	</fieldset>
	<br><br><br>
		<fieldset class="we">
		<center>
		<?php

		//SINTAK UNTUK MENAMPILKAN DATA DI DATABASE
		$show = mysql_query("SELECT * FROM tb_bukutamu order by id DESC") or die (mysql_error());
		while($row = mysql_fetch_assoc($show)){
			$id = htmlentities($row['id']);
			$nama = htmlentities($row['nama']);
			$email = htmlentities($row['email']);
			$komentar = htmlentities($row['komentar']);
			
			echo "Id = $id<br>";
			echo "Nama = $nama<br>";
			echo "Email = $email<br>";
			echo "Komentar = $komentar<br>";
			echo "<a href=\"javascript:hapus('".$id."')\">Delete</a> | <a href='?method=edit&id=$id'>Edit</a>";
			echo "<hr>";
		}
	?>
	</center>
	</fieldset>
</body>
</html>