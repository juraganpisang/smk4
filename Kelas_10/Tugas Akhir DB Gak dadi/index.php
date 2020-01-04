<!DOCTYPE html>
<head>
	<title>Halaman Administrator</title>
	<link href="css/css.css" rel="stylesheet" type="text/css" />
	<style>
	body {
		background-color: #01BEF2;
	}
	.inner {
		margin: 200px auto;
		padding: 20px;
		width: 240px;
		border: 1px solid #333;   
	}
	.ab {
		margin: 46px 0px 0px 0px;
		color:white;
	}
	.ab:hover {
		margin: 46px 0px 0px 0px;
		color: black;
		background-color:white;
	}
	.b {
		margin: 46px -4px 0px -4px;
		color:white;
	}
	.b:hover {
		margin: 46px -4px 0px -4px;
		background-color: white;
		color:black;
	}
	.c {
		margin: 46px 0px 0px 0px;
		color:white;
	}
	.c:hover {
		margin: 46px 0px 0px 0px;
		background-color: white;
		color:black;
`	}
	.aa {
		margin: 46px 0px 0px 0px;
		color:white;
	}
	.aa:hover {
		margin: 46px 0px 0px 0px;
		background-color: white;
		color:black;
`	}	
	</style>
</head>  
<body>  
	<?php 
		ini_set('display_errors', 1);
		define('_VALID', 1);  
		// include file eksternal require_once('./auth.php');  
		require_once ('./auth.php');
		init_login();
		validate();  
	?>
	<center><h3>Simulasi Halaman Admin</h3></center>
	<header>
		<center><li><a class="ab" href="index.php" >Home</a></li>
		<li><a class="c" href="profil.php" >Profile</a></li>
		<li><a class="b" href="register.php">Register</a></li>
		<li><a class="aa" href="logout.php">Logout</a></center>
	</header>
		<br>
		<center><h2>SELAMAT DATANG DI WEB BIODATA KELOMPOK KAMI</h2><br>
	<p>Menu-menu admin ada di sini</p>
</body>  
</html>   