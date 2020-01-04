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
				background-color : lightblue;
				}
			.lol {
				font-size : 20px;
				font-family : Arial Black;
				border-radius : 15px;
				background : darkblue;
				color : white;
			}
			.sip {
				font-family : Broadway;
				text-align : center;
			}
			
		</style>
	</head>
	<body>
		<h1 class="sip">LOGIN USER</h1>
		<hr>
		<fieldset>
				<form method="POST" action="proses.php">
				<h2><p>Username<input type="text" name="user" placeholder="Masukkan Username" required/></p>
				<p>Password<input type="password" name="pass" placeholder="Masukkan Password" required/></p>
				<p><input type="submit" value="Login" name="input" class="lol" /></p></h2>
				</form>
		</fieldset>
	</body>
</html>