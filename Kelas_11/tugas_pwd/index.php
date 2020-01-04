<?php
session_start();
include_once 'koneksi.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: bukutamu.php");
}

if(isset($_POST['login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM tb_login WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: bukutamu.php");
	}
	else
	{
		?>
        <script>alert('Username / Password anda Salah');</script>
        <?php
	}
	
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login">
<form action="" method="post">
<fieldset class="login">
<h2 class="">FORM LOGIN</h2><br>
<input type="text" name="email" placeholder="Your Email" class="login-input" required />
<input type="password" name="pass" placeholder="Your Password" class="login-input" required />
<button type="submit" name="login" class="login-submit">Sign In</button>
<a href="register.php" class="login-submit">Sign Up</a>
</fieldset>
</form>
</div>
</center>
</body>
</html>