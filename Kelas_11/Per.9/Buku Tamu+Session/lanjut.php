	<?php
	session_start () ;
	if (!isset ($_SESSION['username']))
	{
	header ('location:index.php');
	}
	?>
<html>
	<title> Login </title> 
	<head>
		<style type="text/css">
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
			.terserah {
				width :200px;
				height : 70px
				}
			.re {
				margin-left : 150px;
				font-size : 12px;
				font-family : segoe ui;
			}
		</style>
	</head>
	<body>
	<center>
		<h1>BUKU TAMU</h1>
		<div class="reff">
		<form action ="simpan.php" method="POST" name="input">
				<input type="text" name="nama" placeholder="Username" class="tols" required><br><br>
				<input type="email" name="email" placeholder="Email" class="tols" required><br><br>
				<textarea name="komentar" class="terserah" placeholder="Komentar" required></textarea> <br><br>
				<input type="submit" name="kirim" value="Submit" id="send">
		</form>
		<?php
		echo "<div class='re'><a href='logout.php'>LOGOUT</a></div>";
		?>
		</div>
	</center>
	</body>
</html>