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
			
			#me{
				background-color:#02AB68;
				width:250px;
				text-align:left;
				height:25px;
				color:white;
			}
			
			#file {
				background-color:#02AB68;
				margin-left:420px;
				margin-top:-216px;
				width:850px;
				height:500px;
				border:solid 1px #02AB68;
				padding:30px auto 5px 50px;
				
			}
			#date {
				padding-top:0px;
				margin-right:500px
				font-size:20px;
				font-family:segoe ui;
				color:white;
				text-align:center;
			}
			#namaku {
				padding-top:5px;
				font-size:26px;
				font-family:segoe ui;
				color:white;
				text-align:center;
				padding-bottom:0px;
				
			}
			#user {
				margin-left:375px;
				margin-top:30px;
				width:100px;
				padding-bottom:5px;
			}
			
			#mail {
				width:60px;
				margin-left:275px;
				margin-top:20px;
				display:inline-block;
			}
			#mail2 {
				margin-left:340px;
				margin-top:-50px;
				font-family:segoe ui;
				font-size:18px;
			}
			
			#maps {
				width:60px;
				margin-left:300px;
				margin-top:20px;
				display:inline-block;
			}
			#maps2 {
				margin-left:370px;
				margin-top:-50px;
				font-family:segoe ui;
				font-size:18px;
			}
			#sh {
				margin-left: 430px;
				width:830px;
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
			<li><a href="profile2.php" id="me">Rachel cornelie amanda</a></li>
			<li><a href="shinta.php" class="bawah">Shinta zindani</a></li>
		</ul>
		<div id="file">
			<image src="img/user.png" id="user" />
			<p id="namaku"> Rachel Cornelie Amanda </p>
			<p id="date"> Born on october 11 - 1999 </p>
			<image src="img/mail.png" id="mail" />
			<p id="mail2">rachelcornelieif@gmail.com</p>
			<image src="img/maps.png" id="maps" />
			<p id="maps2">On Batu city</p>
		</div>
		<image src="img/shadow-2.png" id="sh" />
		<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
	  </body>
</html>