<!doctype html>
<html>
	<head>
		<title>Home</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
		<style>
			.ab {
				margin: 46px 0px 0px 0px;
				color:black;
				background-color: white;
			}
			.lo {
				width: 1350px;
			}
			.po {
				color: white;
				margin: 0px 0px 0px 980px;
			}	
		</style>
	</head>
	<body>
		<header>
			<li><a class="ab" href="index_2.php" >Home</a></li>
			<li><a class="c" href="profil_2.php" >Profile</a></li>
			<li><a class="b" href="login.php" >Logout</a></li>		
		</header>
		<?php
				session_start();
				if (isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				echo
				'<li><a class="po">Admin</a><br>
				<br>
				<h2><center class="lo">Anda sudah berhasil masuk<br>
				Saat ini, Anda dapat membuka profil kami</li></center>'.
				'</p>';
				
				} else {
				header('location: login.php');
				exit;
				}
		?>
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