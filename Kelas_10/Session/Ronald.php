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
			.q {
				margin: 0px 30px 0px 350px;
				background-color: #00AFEF;
				color: white;
				width: 120px;
			}
			.r {
				margin: 0px 30px 0px -35px;
				background-color: #00AFEF;
				color: white;
				width: 120px;
			}
			.t {
				margin: 0px 30px 0px -35px;
				background-color: #00AFEF;
				color: white;
				width: 120px;
			}
			td {
				border: 3px solid black;
				color: black;
				padding: 10px;
			}
			th {
				border: 3px solid black;
				color: black;
				padding: 10px;
			}
			hr {
				border: 4px solid black;
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
			header('location: login.php');
			exit;
			}
		?>
		</header>
		<table class="as">
		<br>
		<hr>
			<tr>
				<td>
					<center>Laki laki ini lahir di Malang Jawa Timur. Dia hobi ngecepret, tapi ngecepretnya bercanda semua.<br>Dia sosok orang yang disukai anjing, buktinya kemarin dia dikejar anjing<br> namun dia nya lari karena gak suka sama anjingnya </center>
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
		<table width="1000px">
			<td>
			<center><h3>PESAN :</h3>
			<b>ANAK LAKI NAKAL WAJAR!<br>TAPI KALAU NGELAWAN ORANG TUA,<br> ITU KURANG AJAR!!</b></center>
			<td>
			<center><img src="img/ronald.jpg" width="450px" height="300px"></center>
			</td>
			</td>
			<tr>
				<th>Nama Lengkap </th>
				<th>RONALD ARRIVAL FAJAR</th>
			</tr>
			<tr>
				<th>TTL</th>
				<th>Malang, 10 Juli 1999</th>
			</tr>
			<tr>
				<th>Alamat </th>
				<th>Jalan Gunung Jati No.241 Pandanlandung</th>
			</tr>
			<tr>
				<th>E-Mail </th>
				<th>ronaldarrivalf@gmail.com</th>
			</tr>
			<tr>
				<th>Facebook </th>
				<th>Ronald Arrival Fajar</th>
			</tr>
			<tr>
				<th colspan="2">Riwayat Pendidikan</th>
			</tr>
			<tr>
				<td colspan="2">
					<center>
					<ol><b>TK Muslimat NU 09</ol>
					<ol>SDN Bandulan 2 Malang</ol>
					<ol>SMP Negeri 2 Malang</b></ol>
					</center>
				</td>
			</tr>
		</table>
			</blockquote>
		</form>
	<br>
	<br>
	<hr>
	<br>
	<footer><center><br><h2>Copyright ARMI RODA</footer>
	</body>
</html>