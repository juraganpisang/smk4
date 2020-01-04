<html>
<body>
	<div class="wrap">
	<div class="footer">
AMAZING SLIDE
<br>
	</div>
	</div>
</body>
</html>
<?php
	error_reporting(0);
	$user1= "admin";
	$pass1= "cerdas";
	$user = $_POST['user'];
	$pass = $_POST ['pass'];
		if (($user == $user1) && ($pass == $pass1)) {
			echo "<center><b><h3>LOGIN BERHASIL</h3></b></center>";
			echo "<center><form action='isian.php' method='POST' name='input'>
					<input type='submit' name='kirim' value='lanjut'>
					</form></center>";
		}
		else {
			echo "<center><b><h3>LOGIN GAGAL</h3></b></center>";
			echo "<center>Periksa Username / Password Anda</center>";
			echo "<center><form action='index.php' method='POST' name='input'>
					<input type='submit' name='kirim' value='kembali'>
					</form></center>";	
		}
?>