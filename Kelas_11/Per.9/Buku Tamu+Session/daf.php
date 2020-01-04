<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/CSS" href="css/this.css">
	<?php
		include 'koneksi.php';
	?>
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
	}
	.tols {
		width:200px;
		height:30px;
		text-align:center;
		border-radius:5px;
		font-family:segoe ui;
		font-weight:bold;
		color:black;
	}
	#send {
		width:200px;
		height:30px;
		text-align:center;
		border-radius:5px;
		border:solid 1px brown;
		font-family:segoe ui;
		background-color :brown;
		color:white;
		}
	#send:hover{
		background-color: red;
	}
	</style>
</head>
<body><center>
<div class="reff">
	<form action="" name="daftar" method="post" >
		<h1>Sign up</h1>
		<input type="text" name="username" placeholder="Username" class="tols" required ><br>
		<input type="password" name="password" placeholder="Password" class="tols" required><br>
		<input type="submit" name="simpan" id="send" value="Mendaftar">
	</form>
</div>
</center>
</body>
</html>
		<?php
			include("koneksi.php");
			if (isset($_POST['simpan'])){
				$username 		=htmlentities($_POST['username']);
				$password		=htmlentities($_POST['password']);
						
				$sql = "INSERT INTO login (username,password) VALUES ('$username','$password')";
				$hasil=mysql_query($sql);
				if ($hasil){
					echo "<script type='text/javascript'> alert('Akun berhasil mendaftar');</script>
						<center><a href=\"index.php\">Login</a></center>";
				}else{
					echo "<script type='text/javascript'> alert('Maaf gagal mendaftar !!!');</script>
						<a href=\"daf.php\">Kembali</a>";
				}
			}
		?>