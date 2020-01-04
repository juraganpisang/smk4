<!doctype html>
<html>
	<head>
		<title>Home</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
		<style>
			.c {
				margin: 46px 0px 0px 0px;
				color:black;
				background-color: white;
			}
			.b:hover {
				margin: 46px -4px 0px -4px;
				background-color: white;
				color:black;
			}
			.ab:hover {
				margin: 46px 0px 0px 0px;
				background-color: white;
				color:black;
			}
			.po {
				color: white;
				margin: 0px 0px 0px 980px;
			}	
		</style>
	</head>	
	<body>
		<header>
			<li><a class="ab" href="index_2.php" >Home</a></li>
			<li><a class="c" href="profil_2.php" >Profile</a></li>
			<li><a class="b" href="logout.php" >Logout</a></li>
		<?php
			session_start();
			if (isset($_SESSION['user'])){
			$user = $_SESSION['user'];
			echo
			'<li><a class="po">Admin</a></li>'.
			'</p>';
				
			} else {
				echo
			'<li><br><h2>Maaf,Anda belum login<br>
			Anda tidak dapat membuka profil kami<br>
			Jika ingin melihat profil kami klik "Login" di bagian atas</li>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<footer>'.
			'</p>';
			exit;
			}
		?>		
		</header>
		<table class="as">
			<tr>
				<td>
					<h1>Biodata Singkat Tentang Kelompok Kami</h1>
				</td>
			</tr>
		</table>
		<br>
		<form class="qw">
			<li><a class="q" href="Arfin.php" >Arfin Fajar M</a></li>
			<li><a class="w" href="Ronald.php" >Ronald Arrival F</a></li>
			<li><a class="t" href="Saida.php" >Saidatul M</a></li>
			<li><a class="r" href="Wahyu.php" >Wahyu Mei C</a></li>
			<br/><br/>
			<blockquote>
			<h3><center>Tidak Ada Seseorang Yang Terlahir Sendiri
			</blockquote>
		</form>
	</body>
</html>