	<?php
	session_start () ;
	?>
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
<?php
echo '<fieldset class="tr">';
		echo '<h1><center>BUKU TAMU';
		echo "<h3>Entri Data <a href='lanjut.php'>Disini</a></h3>";
		echo "<a href='logout.php'>LOGOUT</a>";
		echo '</fieldset>'
?>
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