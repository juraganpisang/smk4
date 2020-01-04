<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="kotak1">
		<span>Login Admin</span><b><br>
	<form method="POST" action="">
	<input type="text" name="username" placeholder="Username" class="input1" required/><br><br>
	<input type="password" name="password" placeholder="Password" class="input1" required/><br><br>
	<input type="submit" name="login" value="LOGIN" />
	</form>
	</div>
</body>
<?php
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = "dion maulana";
		$pass = "12345";
		if(($username == $nama)&&($password == $pass)){
			session_start();
			$_SESSION['username'] = $username;
			echo "<script>alert('Anda berhasil login');</script>";
			echo "<script>document.location = 'manage.php';</script>";
		}else{
			echo "<script>alert('Anda gagal login');</script>";
			echo "<script>document.location = 'index.php';</script>";
		}

	}
?>
</html>