<html>
<body>
	<form action= "" method="POST" name="input">
	<h2>
	<input type="checkbox" name="klub1" value="Manchester United"> Manchester United <br>
	<input type="checkbox" name="klub2" value="Real Madrid"> Real Madrid <br>
	<input type="checkbox" name="klub3" value="PSG"> PSG <br>
	<input type="checkbox" name="klub4" value="Juventus"> Juventus <br>
	</h2>
	<input type="submit" name="kirim" value="KIRIM">
	</form>
</body>
</html>
<?php
	error_reporting (0);
	echo "Klub favorit Anda <br>";
	If (isset($_POST['kirim'])) {
	$klub1=$_POST ['klub1'];
	$klub2=$_POST ['klub2'];
	$klub3=$_POST ['klub3'];
	$klub4=$_POST ['klub4'];
	}
	if (isset($_POST['klub1']));{
	$klub1 = $_POST ['klub1'];
	echo "$klub1 <br>";
	}	
	if (isset($_POST['klub2']));{
	$klub1 = $_POST ['klub2'];
	echo "$klub2 <br>";
	}
	if (isset($_POST['klub3']));{
	$klub1 = $_POST ['klub3'];
	echo "$klub3 <br>";
	}
	if (isset($_POST['klub4']));{
	$klub1 = $_POST ['klub4'];
	echo "$klub4 <br>";
	}
?>