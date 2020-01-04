<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="header">
		<div>
			<a href="../index.php" id="logo"><img src="../images/logo.png" width="100px"></a>
			<ul>
				<li>
					<a href="../index.php">Beranda</a>
				</li>
				<li class="selected">
					<a href="rekomendasi.php">Rekomendasi</a>
				</li>
				<li>
					<a href="opsional.php">Opsional</a>
				</li>
				<li>
					<a href="../pemesanan.php">Pemesanan</a>
				</li>
				<li>
					<a href="../admin/loginadmin.php">Login Admin*</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="subdivisions">
		<ul>
			<li>
				<div>
					<h3><?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 1');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat'].". ";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					echo $row['keterangan'];
					?>
					</p>
					<h4>
					<?php
					echo "IDR ".$row['harga'];
					?>
					</h4>
					<?php
						echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
					?>
				</div>
				<a href=""><img src="../images/hotelijen.jpg" class="rt"></a>
			</li>
			<li>
				<div>
					<h3><?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 2');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." ";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					echo $row['keterangan'];
					?>
					</p>
					<h4>
					<?php
					echo "IDR ".$row['harga'];
					?>
					</h4>
					<?php
						echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
					?>
				</div>
				<a href=""><img src="../images/hoteltugu.jpg" class="rt"></a>
			</li>
			<li>
				<div>
					<h3><?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 3');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." ";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					echo $row['keterangan'];
					?>
					</p>
					<h4>
					<?php
					echo "IDR ".$row['harga'];
					?>
					</h4>
					<?php
						echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
					?>
				</div>
				<a href=""><img src="../images/hotelsinghasari.jpg"class="rt"></a>
			</li>
			<li>
				<div>
					<h3><?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 4');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					</h4>
					<?php
					echo "Alamat ".$row['alamat']." ";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					echo $row['keterangan'];
					?>
					</p>
					<h4>
					<?php
					echo "IDR ".$row['harga'];
					?>
					</h4>
					<?php
						echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
					?>
					</p>
				</div>
				<a href=""><img src="../images/hotelswiss.jpg" class="rt"></a>
			</li>
		</ul>
	</div>
	<div id="footer">
		<div>
			<p>
				&#169; 2015 XI RPL B.
			</p>
			<div class="connect">
				<a href="" id="googleplus">google+</a> <a href="" id="contact">contact</a> <a href="" id="facebook">facebook</a> <a href="" id="twitter">twitter</a>
			</div>
		</div>
	</div>
</body>
</html>