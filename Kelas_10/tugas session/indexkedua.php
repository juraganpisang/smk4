<!DOCTYPE HTML>
<html>
	<head>
		<title> GRAFIKACom </title>
		<link href="css/embeded.css" rel="stylesheet" type="text/css" />
		<style>
			#mas{
				margin-top:0px;
				margin-left:550px;
				border:solid 1px #2F333E;
				width:700px;
				padding-left:20px;
				padding-right:20px;
				background-color:#2F333E;
				color:white;
				border-radius:0px 20px 0px 20px;
				text-align:justify;
				font-size:16px;
				font-family:segoe ui;
			}
			
			span {
				padding-left:30px;
			}
			
			#hed {
				width:350px;
				margin-top:130px;
				font-size:20px;
				border:1px solid #02AB68;
				padding:10px;
				margin-left:550px;
				margin-bottom:0px;
				border-radius:10px 30px 0px 0px;
				color:white;
				background-color:#02AB68;
				
			}
			#pak {
				margin-top:-420px;
				margin-left:150px;
			}
			
			#sh {
				width:730px;
				margin-left:560px;
				margin-top:-24px;
			
			}
			
		</style>
	</head>
	<body>
		<header>
			</br>
			<image src="img/logo.png" id="logo" />
			<h1>GRAFIKACom</h1>
			<li><a href="indexkedua.php" >Home*</a></li>
			<li><a href="aboutus2.php">About us</a></li>
			<li><a href="whatsnew2.php">What's New</a></li>	
			<li><a href="profile2.php">Profile</a></li>	
			<?php
				session_start();
				if (isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				echo
				'<li><a href="login.php" id="out">Sign out</a></li>'.
				'</p>';
				
				} else {
				header('location: login.php');
				exit;
				}
		  ?>
			
		</header>
		<nav>
			<p id="akun"> Usser Account</p>
			<image src="img/user-40.png" id="avatar" />
		</nav><br/><br/><br/><br/><br/><br/><br/>
		<image src="img/TOP-2.png" id="top" />
			<p id="inka">The Intergrated School on the Malang</p>
			<p id="ink">Goes to International</p><br/><br/><br/><hr/><br/><br/>
		<p id="hed">Says The Head Master</p>
		<div id="mas">
			</br>
			<p class="part2"><span>Semoga</span> aktivitas sehari-hari yang kita kerjakan selaras dengan Ekspektasi Tuhan YME, sehingga Pencipta kita menilainya sebagai bentuk implementasi kebahagiaan atas nikmat yang diberikanNya. Mudah-mudahan syukur yang kita lesakkan benar-benar menemukan esensinya.
Transparansi Informasi dan Akuntabilitas Manajemen, dua terminologi ini merupakan muara eksistensi dari Website SMK Negeri 4 Malang yang sedang anda nikmati ini. Transparansi Informasi ditandai dengan adanya sajian-sajian alternasi semua hal yang berkaitan dengan Program Kerja SMK Negeri 4 Malang, Data Profil Program Keahlian SMK Negeri 4 Malang, dan laman-laman penunjang yang memungkinkan adanya komunikasi antar sivitas akademika SMK Negeri 4 Malang (baik peserta didik, staf pengajar, maupun karyawan). Sedangkan Akuntabilitas Manajemen akan sangat ditunjang dengan capaian-capaian target kerja yang terukur. Indikasi ketercapaian tujuan keduanya (Transparansi Informasi dan Akuntabilitas Manajemen) akan memungkinkan terbukanya peluang keterlibatan yang dinamis & harmonis dari stakeholder (pengampu dan penikmat kebijakan) untuk mencapai tujuan bersama dari lembaga ini.
sekian, Terima Kasih.</p></br>
		</div>
		<image src="img/pak.jpg" id="pak" />
		<image src="img/shadow-2.png" id="sh" />
		
		<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
	  </body>
</html>