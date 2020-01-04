<html>
	<title></title>
		<head></head>
	<body>
	<form action= "form.php" method= "post" name= "input">
	Nama : <input type= "text" name="nama"><br>
	Alamat : <input type="text" name="alamat"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="kirim" value="KIRIM">
	</form>
	</body>
</html>
<?php
	if (isset ($_POST['kirim'])) {
	$nama= $_POST ['nama'];
	$alamat= $_POST ['alamat'];
	$pass= $_POST ['pass'];
	echo "<b>Nama Anda : $nama<br>";
	echo "Alamat Anda : $alamat<br>";
	echo "Password Anda : $pass";
	}
?>