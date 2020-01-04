<!DOCTYPE HTML>
<html>
	<head>
		<title> GRAFIKACom </title>
		<link href="css/embeded.css" rel="stylesheet" type="text/css" />
		<style>
			#about {
				margin-top:0px;
				margin-left:260px;
				border:solid 1px #2F333E;
				width:1000px;
				padding-left:20px;
				padding-right:20px;
				background-color:#2F333E;
				color:white;
				border-radius:0px 20px 0px 20px;
			}
			#rpl {
				margin-top:40px;
				text-align:center;
				font-size:20px;
			}
			.part1{
				
			}
			
			span {
				padding-left:30px;
			}
			#ab{
				text-align:center;
				width:300px;
				margin-left:260px;
				margin-top:100px;
				margin-bottom:0px;
				border:solid 1px #02AB68;
				background-color:#02AB68;
				border-radius:15px 15px 0px 0px;
				color:white;
			}
			
			#sh {
				margin-left:300px;
			}
		</style>
	</head>
	<body>
		<header>
			</br>
			<image src="img/logo.png" id="logo" />
			<h1>GRAFIKACom</h1>
			<li><a href="indexkedua.php">Home*</a></li>
			<li><a href="aboutus2.php" >About us</a></li>
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
		</nav>
		<div id="ab">
			<p> About Software Enginering</p>
		</div>
		<div id="about">
			<p id="rpl">Software Enginering</br>
			( Rekayasa Perangkat Lunak )</p></br>
			<p class="part1"><span>Pengertian</span> Rekayasa Perangkat Lunak (Software Engineering) adalah : “ Suatu disiplin ilmu yang membahas semua aspek produksi perangkat lunak, mulai dari tahap awal yaitu analisa kebutuhan pengguna, menentukan spesifikasi dari kebutuhan pengguna, disain, pengkodean, pengujian sampai pemeliharaan sistem setelah digunakan.”</p>
			<p class="part1"><span>Program </span>Keahlian Rekayasa Perangkat Lunak (RPL) didirikan sejak tahun 2006. Rekayasa Perangkat Lunak merupakan salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer. Saat ini RPL memiliki 9 kelas yaitu kelas X sebanyak 3 kelas, kelas XI sebanyak 3 kelas dan Kelas XII sebanyak 3 kelas.
									Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan industri bagi ketersediaan tenaga Teknisi dalam bidang Rekayasa Perangkat Lunak.</p>
			<p class="part1"><span>Dengan</span> memanfaatkan kemampuan, kompetensi, pengalaman dan berbagai peluang yang ada, lulusan Program Keahlian Rekayasa Perangkat Lunak diharapkan akan bisa menjadi :</br>
									</br>
									1.Web Application Programmer</br>
									2.Database Programmer</br>
									3.Interfacing Programmer</br>
									4.Mobile Application Programmer (Java and Android)</br>
									5.Desktop Application Programmer</br>
									6.C and C++ Programmer</br>
									7.Game Programmer</br>
									8.Hardware and Software Technicians</br>
									9.IT Support and IT Staff</br>
									10.Pekerjaan-pekerjaan lainnya yang berbasis komputer</br></br></br></br>
			</p>
			</div>
			<image src="img/shadow-2.png" id="sh" />
			<footer>
			<p id="copy"> © 2015 GRAFIKACom. All rights resevered. Designed by ICT RBL-B </p>
			</footer>
			
	  </body>
</html>