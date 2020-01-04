<!DOCTYPE HTML>
<html>
	<head>
		<title> GRAFIKACom </title>
		<link href="css/embeded.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#horiz {
				margin-top:70px;
				margin-left:90px;
				width:200px;
				
			}
			
			.bawah{
				
				background-color:#2F333E;
				width:250px;
				text-align:left;
				height:25px;

			}
			
			.bawah:hover{
				background-color:#02AB68;
				width:250px;
				text-align:left;
				height:25px;
				color:white;
			}
			
			.bawah:active{
				background-color:white;
				width:250px;
				text-align:left;
				height:25px;
				color:#02AB68;
			}
		</style>
	</head>
	<body>
		<header>
			</br>
			<image src="img/logo.png" id="logo" />
			<h1>GRAFIKACom</h1>			
			<li><a href="indexkedua.php">Home*</a></li>
			<li><a href="aboutus2.php">About us</a></li>
			<li><a href="whatsnew2.php">What's New</a></li>	
			<li><a href="profile2.php" >Profile</a></li>		
			<?php
				session_start();
				if (isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				echo
				'<li><a href="login.php" id="out">Sign out</a></li>'.
				'</p>';
				
				} else {
				header('location: login.php');
				exit;
				}
		  ?>
			
		</header>
		<nav>
			<p id="akun"> Usser Account</p>
			<image src="img/user-40.png" id="avatar" />
		</nav>
		<ul id="horiz">
			<li><a href="ages.php" class="bawah">Agestya rizki pratama </hr></a></li>
			<li><a href="hafad.php" class="bawah">Hafad septiyan</a></li>
			<li><a href="rachel.php" class="bawah">Rachel cornelie amanda</a></li>
			<li><a href="shinta.php" class="bawah">Shinta zindani</a></li>
		</ul>
		
		<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
	  </body>
</html>