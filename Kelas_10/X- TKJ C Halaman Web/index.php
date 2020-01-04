<!DOCTYPE HTML>
<html>
	<head>
		<title>Form Login</title>
		<style>
			body {
				margin: auto;
				padding: 10px;
				}
			fieldset{
				border-radius : 10px;
				width : 200px;
				height : 250px;
				margin : auto;
				text-align : center;
				background-color : #24542A;
				}
			.lol {
				font-size : 20px;
				font-family : Arial Black;
				border-radius : 15px;
				background : #24542A;
				color : white;
			}
			.sip {
				color: white;
				font-family : Broadway;
				text-align : center;
			}
			.sop {
				color: white;
			}
			hr {
				border: 4px solid white;
			}
		</style>
	</head>
	<body bgcolor="#44B528">
		<h1 class="sip">LOGIN USER</h1>
		<hr>
		<br>
		<fieldset>
				<form method="POST" action="home.php">
				<h2><p class="sop">Username<input type="text" name="user" placeholder="Masukkan Username" required/></p>
				<p class="sop">Password<input type="password" name="pass" placeholder="Masukkan Password" required/></p>
				<p><input type="submit" value="Login" name="input" class="lol" /></p></h2>
				</form>
		</fieldset>
		<a class="sop"><center><h3>Anda harus login terlebih dahulu</center></a>
	</body>
</html>