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
			.a{
				margin: auto;
			}
		</style>
	</head>	
	<body>
		<header>
			<li><a class="ab" href="index.php" >Home</a></li>
			<li><a class="c" href="profil.php" >Profile</a></li>
			<li><a class="b" href="login.php" >Login</a></li>
		</header>
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
			</form>
		</div>
	</body>
			<?php
					$user = $_POST ['user'];
					$pass = $_POST ['pass'];
					if (isset($_POST['login']))
					$user = strip_tags($user);
					$pass = strip_tags($pass);
					
					if (($user=='admin') && ($pass=='cerdas'))
					{
					session_start();
					$_SESSION['user'] = $user;
						echo header ( "location:index_2.php");
						}
					elseif ($user!='admin')
					{
						echo "<center><li><br><h3>Username Salah</li></center>";
						}
					elseif ($pass!='cerdas')
					{
						echo "<center><li><br><h3>Password Salah</li></center>";
						}
					else
					{
						echo "<center><li><br><h3>Username & Password Salah</center></li>";
						}
			?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<footer>
</html>