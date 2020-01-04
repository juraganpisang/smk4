<?php
	session_start();
?>
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
					<li class="current_page_item"><a href="home.php" accesskey="1" title="">Beranda</a></li>
					<li><a href="artikel1.php" accesskey="2" title="">Artikel</a></li>
					<li><a href="diagnosis1.php" accesskey="3" title="">Diagnosis</a></li>
					<li><a href="logout.php" accesskey="4" title="">Logout*</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
	<?php
	include '../koneksi.php';

	$result=mysql_query('SELECT * FROM tb_artikel_penyakit ORDER BY no ASC');
	$row=mysql_fetch_row($result);
	echo "<H2>$row[1]</H2> <br>";
	?>
		</div>
	<?php
	include '../koneksi.php';

	$result=mysql_query('SELECT * FROM tb_artikel_penyakit ORDER BY no ASC');
	$row=mysql_fetch_row($result);
	echo "<P>$row[2]</P> <br>";
	?>
	</div>
</div>
<div class="wrapperlol">
	<div id="three-column" class="container">
	<div id="portfolio" class="container">
		<div class="column1">
			<div class="box"> <a href="#"><img src="../images/1.jpg" width="100px" height="200px" class="image image-full" /></a>
	<?php
	include '../koneksi.php';

	$result=mysql_query("SELECT * FROM tb_artikel_penyakit WHERE no = 2") or die (mysql_error());
	$row = mysql_fetch_array($result);
	?>
		<h3>
	<?php
		echo $row['judul']."<br/>";
	?>
	</h3>
	<p>
	<?php
		echo $row['artikel'];
	?>	
	</p>
			</div>
		</div>
		<div class="column2">
			<div class="box"> <a href="#"><img src="../images/2.jpg" width="100px" height="200px" class="image image-full" /></a>
				<?php
	include '../koneksi.php';

	$result=mysql_query("SELECT * FROM tb_artikel_penyakit WHERE no = 3") or die (mysql_error());
	$row = mysql_fetch_array($result);
	?>
		<h3>
	<?php
		echo $row['judul']."<br/>";
	?>
	</h3>
	<p>
	<?php
		echo $row['artikel'];
	?>	
	</p></div>
		</div>
		<div class="column3">
			<div class="box"> <a href="#"><img src="../images/3.jpg" width="100px" height="200px" class="image image-full" /></a>
				<?php
	include '../koneksi.php';

	$result=mysql_query("SELECT * FROM tb_artikel_penyakit WHERE no = 4") or die (mysql_error());
	$row = mysql_fetch_array($result);
	?>
		<h3>
	<?php
		echo $row['judul']."<br/>";
	?>
	</h3>
	<p>
	<?php
		echo $row['artikel'];
	?>	
	</p></div>
		</div>
		<div class="column4">
			<div class="box"> <a href="#"><img src="../images/4.jpg" width="100px" height="200px" class="image image-full" /></a>
				<?php
	include '../koneksi.php';

	$result=mysql_query("SELECT * FROM tb_artikel_penyakit WHERE no = 5") or die (mysql_error());
	$row = mysql_fetch_array($result);
	?>
		<h3>
	<?php
		echo $row['judul']."<br/>";
	?>
	</h3>
	<p>
	<?php
		echo $row['artikel'];
	?>	
	</p></div>
		</div>
	</div>
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
