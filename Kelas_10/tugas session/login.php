<!DOCTYPE HTML>
<html>
	<head>
		<title>GRAFIKACom</title>
		<link href="css/embeded.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#bingkai{
				background-color:#CCCCCC;
				width:250px;
				border:solid 1px #ccc;
				border-radius:5px;
				padding-top:10px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:50px;
				margin-top:10px;
				margin-left:130px;
				box-shadow: 0 0 0 1px #E4E4E4 inset;
				
			}
			
			#sign {
				font-size:30px;
				color:#2F333E;
			}
			
			#nama{
			    background: #f1f1f1;
				  padding: 10px 5px;
				  margin: 0 0 5px 0;
				  width: 238px;
				  border: 1px solid #ccc;
				  border-radius: 3px;
				  box-shadow: 0 1px 1px #ccc inset;
				  typeface:hevetica nueue;
			}
			
			#key{
			    background: #f1f1f1;
				  padding: 10px 5px;
				  margin: 0 0 5px 0;
				  width: 238px;
				  border: 1px solid #ccc;
				  border-radius: 3px;
				  box-shadow: 0 1px 1px #ccc inset;
				  typeface:hevetica nueue;
			}
			
			#nama:focus {
			  background-color: #fff;
			  border-color: #e8c291;
			  outline: none;
			  box-shadow: 0 0 0 1px #02AB68 inset;
			}
			
			#key:focus {
			  background-color: #fff;
			  border-color: #e8c291;
			  outline: none;
			  box-shadow: 0 0 0 1px #02AB68 inset;
			}
			
			#submit {    
			  background-color: #02AB68;
			  background-image: linear-gradient(top, #00C777, #02AB68);
			  -moz-border-radius: 3px;
			  -webkit-border-radius: 3px;
			  border-radius: 3px;
			  text-shadow: 0 1px 0 rgba(0,0,0,.5);
			  box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;    
			  border: 1px solid #1DC481;
			  float: left;
			  height: 30px;
			  padding: 0;
			  width: 100px;
			  cursor: pointer;
			  font: bold 14px Arial, Helvetica;
			  color: #fff;
			}
			
			#submit:focus {    
			  background-color: #e97171;
			  background-image: linear-gradient(top, #d14545, #e97171);
			  
			}
			
			#submit:active {   
			border: 1px solid #7e1515;
			  outline: none;
			  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;   
			  color:#aaa;
			}
			
		</style>
	</head>
	<body>
			<header>
					</br>
					<image src="img/logo.png" id="logo" />
					<h1>GRAFIKACom</h1>
						<li><a href="index.php">Home*</a></li>
						<li><a href="aboutus1.php">About us</a></li>
						<li><a href="whatsnew1.php">What's New</a></li>	
						<li><a href="profile1.php">Profile</a></li>	
						<li><a href="login.php"> Sign in </a></li>	
			</header>
			<nav>
				<p id="akun">Anonymous account's</p>
				
			</nav>
			<image src="img/shadow-1.png" id="shadow1" />
			<div id="bingkai">
				<?php
						session_start();
						if(isset($_SESSION['user']))
						{
						session_destroy();
						}
				  ?>
				  <form action="ceklogin.php" method="post">
						<div>
							<p id="sign"> Sign in Here</p>
							<br/>
							
							<input type="text" name="username" size="14" placeholder="Username" id="nama" required/>
							<br/><br/>
							<input type="password" name="password" size="14" placeholder="Password" id="key" required/>
							<br/><br/>
							<button id="submit" name="login" type="submit">Sign in</button>
						</div>
				</form>
				
			</div>
			<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
	</body>
</html>