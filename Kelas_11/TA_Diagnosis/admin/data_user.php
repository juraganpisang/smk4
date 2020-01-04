<!DOCTYPE html>
<html>
<head>
<title>Healtcare</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<script>
	function hapus(email){
		tanya = confirm("apakah anda yakin akan menghapus user ini?");
		if(tanya== true)
		{
			window.location.href="?method=hapus&email="+email;
		}
	}
</script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="../images/logoes.png" width="300px">
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="indexadmin.php" accesskey="1" title="">Beranda</a></li>
					<li><a href="data_user.php" accesskey="2" title="">Data User</a></li>
					<li><a href="data_artikel.php" accesskey="3" title="">Data Artikel</a></li>
					<li><a href="data_diagnosis.php" accesskey="4" title="">Data Diagnosis</a></li>
					<li><a href="logout.php" accesskey="5" title="">Logout*</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
	</div>
	<div class="title">
	<br><br><br>
	<h3>Halaman Admin</h3>
	<br><br><br>
	<center>
	<div class="ret">
		<?php
		include '../koneksi.php';
		$show = mysql_query("SELECT * FROM tb_user") or die (mysql_error());
		while($row = mysql_fetch_assoc($show)){
			$email = $row['email'];
			$password = $row['password'];
			echo "<hr>";
			echo "Email : $email<br>";
			echo "Password : $password<br>";
			echo "<a href=\"javascript:hapus('".$email."')\">Delete</a>";
			echo "<hr>";
			echo "************************************************************";
	}
	?>
	</div>
	</center>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="">AmazingSlide</a> | Design by <a href="">AmazingSlide</a>.</p>
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
include '../koneksi.php';
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$email = $_GET['email'];
		$delete = "DELETE FROM tb_user WHERE email ='$email' ";
		$sql = mysql_query($delete);
		echo"<meta http-equiv='refresh' content='0; url=data_user.php'>";
	}
	}
?>