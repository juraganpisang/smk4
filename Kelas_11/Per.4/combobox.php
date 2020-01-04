<html>
<title>checkbox</title>
<head></head>
<body>
<form action="" method="post" name="input">
<h2>Kelas RPL :</h2>
<select name="kelas">
	<option value="">-------</option>
	<option value="XI RPL A">Kelas XI RPL A</option>
	<option value="XI RPL B">Kelas XI RPL B</option>
	<option value="XI RPL C">Kelas XI RPL C</option>
	<input type="submit" name="kirim" value="KIRIM">
</form>
</body>
</html>
<?php
error_reporting(0);
if (isset($_POST ['kirim'])){
	$kelas=$_POST['kelas'];
	if (empty ($kelas))
	echo "Anda belum memilih";
	else
	echo "Pilihan Anda : ".$kelas;
}
?>