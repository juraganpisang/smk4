<!DOCTYPE html>
<html>
<head>
<title>Healtcare</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="../images/logoes.png" width="300px">
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="../index.php" accesskey="1" title="">Beranda</a></li>
					<li><a href="artikel.php" accesskey="2" title="">Artikel</a></li>
					<li><a href="diagnosis.php" accesskey="3" title="">Diagnosis</a></li>
					<li><a href="../user/login_user.php" accesskey="4" title="">Login User</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
	</div>
	<div class="title">
	<h3>Halaman Daftar User</h3>
	<br>
	<fieldset class="opu">
	<form action="" method="POST">
	<input type="email" name="email" placeholder="Masukkan Email" class="opp"></br></br>
	<input type="password" name="password" placeholder="Masukkan Password" class="opp"></br></br>
	<input type="submit" name="kirim" value="Daftar" class="suh"></br></br>
	<a href="../user/login_user.php">< < Kembali</a>
	</form>
	</fieldset>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="">AmazingSlide</a> | Design by <a href="">AmazingSlide</a>.</p>		<ul class="contact">
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
</body>
</html>
<?php
			include("../koneksi.php");
			if (isset($_POST['kirim'])){
				$email	 		=htmlentities($_POST['email']);
				$password		=htmlentities($_POST['password']);
				
				$sql = "INSERT INTO tb_user (email,password) VALUES ('$email','$password')";
				$hasil=mysql_query($sql);
				if ($hasil){
					?><script>alert('Akun berhasil mendaftar');
					window.location="../user/login_user.php"</script>;
				<?php
				}else{
					?><script> alert('Maaf gagal mendaftar !!!')</script>;
				<?php
				}
			}
?>