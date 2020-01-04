<!DOCTYPE HTML>
<html>
	<head>
		<title>GRAFIKACom</title>
		<style>
			body {
				background-color:#2F333E;
				display:inline-block;
			}
			h1 {
				display:inline-block;
				width:550px;
				border :solid 1px #02AB68;
				background-color:#02AB68;
				color:white;
				font: bold 30px Arial, Helvetica;
				font-align :center;
				margin:200px auto;
				padding:20px 30px;
			}
			
			a{
				font: bold 30px Arial, Helvetica;
				margin:20px auto;
				text-decoration:none;
				color:white;
				display:inline-block;
				padding:35px 20px 20px 20px;
				
			}
			a:hover{
				font: bold 30px Arial, Helvetica;
				margin:20px auto;
				display:inline-block;
				background-color:white;
				padding:21px 20px 21px 20px;
				color:#2F333E;
			}
			a:active{
				font: bold 30px Arial, Helvetica;
				margin:20px auto;
				display:inline-block;
				background-color:#2F333E;
				padding:35px 20px 0px 20px;
				color:white;
			}
			
			
			
			
		</style>
	</head>
	<body>
		
		<?php
			  $user = 'admin';
			  $pass = 'sega123';
				if (isset($_POST['login']))
			  $username = $_POST['username'];
			  $password = $_POST['password'];
			  $username = strip_tags($username);
			  $password = strip_tags($password);
			  if (($username==$user) && ($password==$pass))
			  {
			  session_start();
			  $_SESSION['user'] = $username;
			  echo '<h1>Terimakasih anda telah berhasil Login</h1>'.
			 
			  '<a href="indexkedua.php">Lanjutkan</a>'.
			  '<br/>';
			  } else {
			  echo '<h1>Username dan password salah</h1>'.
			  
			  '<a href="login.php" >Coba lagi</a>'.
			  '<br/>';
			  }
		?> 
	</body>
</html>