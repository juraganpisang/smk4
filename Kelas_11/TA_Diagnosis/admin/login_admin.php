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
					<li><a href="../user_guest/artikel.php" accesskey="2" title="">Artikel</a></li>
					<li><a href="../user_guest/diagnosis.php" accesskey="3" title="">Diagnosis</a></li>
					<li><a href="../user/login_user.php" accesskey="4" title="">Login User</a></li>
					<li><a href="login_admin.php" accesskey="5" title="">Login Admin*</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
	</div>
	<div class="title">
	<h3>Halaman Login Admin</h3>
	<br>
	<fieldset class="op">
	<form action="" method="POST">
	<input type="text" name="kode" placeholder="Masukkan Kode" class="opp" required></br></br>
	<input type="text" name="username" placeholder="Masukkan Username" class="opp" required></br></br>
	<input type="password" name="password" placeholder="Masukkan Password" class="opp" required></br></br>
	<input type="submit" name="login" value="Masuk" class="suh"></br>
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
	include "../koneksi.php";
	
	if (isset($_POST['login'])){
	
		$kode=htmlentities($_POST['kode']);
		$username=htmlentities($_POST['username']);
		$password=htmlentities($_POST['password']);

			
			$hasil = mysql_query("SELECT * FROM tb_admin WHERE kode='$kode' AND username='$username' AND password='$password' ");
			$row =mysql_fetch_assoc($hasil);
			if ($row['kode'] == $kode AND $row['username'] ==  $username AND $row['password']== $password){
				session_start();
				$_SESSION['kode'] = $kode;
			?>
				<script>alert('Anda berhasil login Mei');
				window.location="indexadmin.php"</script>
			<?php
			}else{
			?>
				<script>alert('Maaf Kode atau Username dan Passwword anda salah');</script>
			<?php
			}
		}
 ?>