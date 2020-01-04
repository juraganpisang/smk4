<style>
	body {
		font-family : Arial;
		background-color : grey;
		padding :50px;
	}
	.reff {
		width:200px;
		margin:50px auto;
		padding:50px;
		border-radius:10px;
		background : white;
</style>
<?php
session_start();
include "koneksi.php";
	
	if (isset($_POST['login'])){
		
		$username=htmlentities($_POST['username']);
		$password=htmlentities($_POST['password']);

			
			$hasil = mysql_query("SELECT * FROM tb_daftar WHERE username ='$username' AND password='$password' ");
			$row =mysql_fetch_assoc($hasil);
			if ($row['username'] ==  $username AND $row['password']== $password){
				session_start();
				$_SESSION['username'] = $username;
				header("location:daftar.php");
			}else{
				?>
				<script>alert('Tidak bisa masuk karena Username atau Password Salah')</script>
				<?php
				echo"Silahkan login lagi <a href='index.php'>Disini</a><BR>
					Jika belum daftar<br>
					Silahkan sign up <a href='signup.php'>Disini</a></h2></center>";
			}
		}
?>
<head>
	Pendaftaran
</head>
<body>
	<H2>FORM LOGIN<H2>
	<form action="" method="POST">
	<input type="text" name="username" placeholder="Username" required />
	<input type="password" name="password" placeholder="Password" required />
	<input type="submit" name="login" value="Login" />
	Butuh akun?<a href="signup.php">SignUp</a>
	</form>
</body>