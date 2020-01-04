<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'koneksi.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	if(mysql_query("INSERT INTO tb_login(username,email,password) VALUES('$uname','$email','$upass')"))
	{
		?>
        <script>alert('REGISTER BERHASIL !!! ');window.location ="index.php"</script>
        <?php
	}
	else
	{
		?>
        <script>alert('REGISTER GAGAL !!');</script>
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
<h2 class="">FORM REGISTER</h2><br>
<input type="text" name="uname" placeholder="Your UserName" class="login-input" required />
<input type="email" name="email" placeholder="Your Email" class="login-input" required />
<input type="password" name="pass" placeholder="Your Password" class="login-input" required />
<button type="submit" name="btn-signup" class="login-submit">Sign Up</button>
<a href="index.php" class="login-submit">Sign In</a></td>
</fieldset>
</form>
</div>
</center>
</body>
</html>