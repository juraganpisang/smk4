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
				background-color: white;
				color:black;
			}
			.c:hover {
				margin: 46px 0px 0px 0px;
				background-color: white;
				color:black;
			}
		</style>
	</head>	
	<body>
		<header>
			<li><a class="ab" href="index.php" >Home</a></li>
			<li><a class="c" href="profil.php" >Profile</a></li>
			<li><a class="b" href="login.php" >Login</a></li>
		</header>
		<?php
			session_start();
			if(isset($_SESSION['user']))
			{
			session_destroy();
			}
		?>
		<div>
			<form action="ceklog.php" method="post">
				<br/>
				<center><h2>FORM LOGIN</h2></center>
				<hr>
				<table>
					<tr>
						
						<td>Username<input type="text" name="user" class="f"/></td>
					</tr>
					<tr>
						<td>Password<input type="password" name="pass" class="e"/></td>
					</tr>
					<tr>
					</tr>
					<tr>
					</tr>
					<tr>
					</tr>
					<tr>
					</tr>
					<tr>
					</tr>
					<tr>
						<td><input type="submit" value="Login" name="input" class="d"/></td>
					</tr>
				</table>
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
			</form>
		</div>
	</body>
</html>