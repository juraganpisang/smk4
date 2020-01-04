<!doctype html>
<html>
	<head>
		<title>Home</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
		<style>
			.b {
				margin: 46px -4px 0px -4px;
				color:black;
				background-color: white;
			}
			.ab:hover {
				margin: 46px 0px 0px 0px;
				background-color: #00AFEF;
				color:white;
			}
			.c:hover {
				margin: 46px 0px 0px 0px;
				background-color: #00AFEF;
				color:white;
			}
		</style>
	</head>	
	<body>
		<?php
			session_start();
			if(isset($_SESSION['user']))
			{
			session_destroy();
			}
		?>
		<header>
		<center><li><a class="ab" href="index.php" >Home</a></li>
		<li><a class="c" href="profil.php" >Profile</a></li>
		<li><a class="b" href="register.php">Register</a></li>
		<li><a class="aa" href="logout.php">Logout</a></center>
		</header>
		<br>
		<center><h2>SELAMAT ANDA SUDAH BERHASIL LOGOUT</h2><br>
		<hr>
		Jika ingin login lagi klik "Login" pada bagian atas<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<footer>
	</body>
</html>