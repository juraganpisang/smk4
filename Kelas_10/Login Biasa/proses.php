<!DOCTYPE HTML>
<html>	
	<head>
		<title>
			proses
		</title>
	</head>
	<style>
		body
			{
				font-size: 50px;
			}
	</style>
	<body>
		<?php
				if (isset ($_POST['input']))
				{
					$user = $_POST['user'];
					$pass = $_POST['pass'];

					if (($user=="lensa")&&($pass=="ida"))
					{
						echo "<p align=\"center\">Selamat $user, Anda Berhasil Masuk :D. </p>";
						}
					else
					{
						echo "<p align=\"center\">Maaf, Username atau Password Anda Salah :(. </p>";
						}
				}
			?>
	</body>
</html>