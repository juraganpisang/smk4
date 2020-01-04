<!DOCTYPE HTML>
<html>
	<head>
		<title> GRAFIKACom </title>
		<link href="css/embeded.css" rel="stylesheet" type="text/css" />
		<style>
			#kat{
				margin-top:80px;
				margin-left:300px;
				margin-bottom:0px;
			}
			#kena{
				height:200px;
				width:838px;
				border:solid 1px #02AB68;
				background-color:#aaa;
				margin-left:300px;
				margin-top:0px;
				margin-bottom:0px;
			}
			
			#meat{
				margin-top:0px;
				margin-left:300px;
			}
			.atas{
				
				background-color:#2F333E;
				width:800px;
				text-align:left;
				height:25px;

			}
			
			.atas:hover{
				background-color:#02AB68;
				width:800px;
				text-align:left;
				height:25px;
				color:white;
			}
			
			.atas:active{
				background-color:white;
				width:800px;
				text-align:left;
				height:25px;
				color:#02AB68;
			}
			#set{
				
				background-color:#02AB68;
				width:800px;
				text-align:left;
				height:25px;

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
			<li><a href="whatsnew2.php" >What's New</a></li>	
			<li><a href="profile2.php">Profile</a></li>	
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
		<div id="kat">
				<li><a href="kata1.php" class="atas">FRIEND PUT A SMILE ON UR FACE & SPRING IN OUR STEP</a></li>
				<li><a href="kata2.php" class="atas">OUR TIME TOGETHER IS JUST NEVER QQUITE ENOUGH</a></li>
				<li><a href="kata3.php" class="atas">CAN YOU SCORE IT ?</a></li>
				<li><a href="whatsnew2.php" id="set">HAPPINES IS A JOURNEY NOT A DESTINATION</a></li>
		</div>
		<div id="kena">
				
		</div>
		<div id="meat">
				<li><a href="kata5.php" class="atas">LIFE IS COLOURFULL</a></li>
		</div>
		<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
	  </body>
</html>