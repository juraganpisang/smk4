<?php
session_start();
if (isset ($_POST['Login'])) 
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if ($user == "admin" && $pass =="123")
		{
			echo"<h1>login berhasil, untuk melanjutkan ke halaman utama silahkan klik <a href='ika.php'>disini</a></h1>";
		}
		else
		{
			echo"<h1>login gagal, untuk kembali login silahkan klik <a href='login.php'> disini </a>  </h1>";
		}
	}

	?>
