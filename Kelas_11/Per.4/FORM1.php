<html>
<title></title>
<head></head>
<body>
	<form action= "FORM1.php" method= "post" name= "input">
	<center>Username <br> <input type= "text" name="user" placeholder="Harap diisi" required><br><br><br>
	Password <br> <input type="password" name="pass" placeholder="Harap diisi" required><br><br><br>
	<input type="submit" name="kirim" value="KIRIM"></center>
	<hr>
	</form>
</body>
</html>
<?php
	if (isset ($_POST ['user']))
	{
		$user = $_POST ['user'];
		$pass = $_POST ['pass'];
		$acak = "apa aja";
		
		if ($user == "admin" && $pass == "cerdas")
		{
			$var = crypt ($pass,$acak);
			$vir = crypt ($pass,$acak);
			
			echo "<center>$var <br>";
			echo "$vir</center> <br>";
			
			if ($var == $vir)
			{
				echo "<center>Login berhasil";
				}
			}
				else
			{
				echo "Login salah</center>";
			}
			}
?>
