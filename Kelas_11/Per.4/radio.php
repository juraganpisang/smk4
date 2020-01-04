<html>
<body>
	<form action= "" method="post" name="input">
	<h2>
	<input type="radio" name="jurusan" value="RPL"> R P L <br>
	<input type="radio" name="jurusan" value="TKJ"> T K J <br>
	<input type="radio" name="jurusan" value="MM"> M M <br>
	<input type="radio" name="jurusan" value="Animasi"> Animasi <br>
	<input type="radio" name="jurusan" value="Produksi"> Produksi <br>
	<input type="radio" name="jurusan" value="Persiapan"> Persiapan <br>
	</h2>
	<input type="submit" name="kirim" value="KIRIM">
	</form>
</body>
</html>
<?php
	If (isset($_POST['kirim'])) {
		$jurusan= $_POST ['jurusan'];
		echo "Jurusan Anda : <b>$jurusan</b><br>";
	}
?>