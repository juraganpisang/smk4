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
				<li>
					<a href="rekomendasi.php">Rekomendasi</a>
				</li>
				<li class="selected">
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
	<div id="body" class="blog">
		<div>
			<ul>
				<li>
					<span class="bg-top"></span> <a href="#"><img src="../images/hotelgajahmada.JPG" class="oip"></a>
					<div>
					<h3>
					<?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 25');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." <br>";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					?>
					</p>
						<div>
							<span>
								<?php
								echo "IDR ".$row['harga'];
								?>
							</span>
								<span>Bintang 3</span><br>
							<span><br>
							<?php
								echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
							?>
							</span><br>
						</div>
					</div>
					<span class="bg-bottom"></span> <span class="triangle"></span>
				</li>
				<li>
					<span class="bg-top"></span> <a href="#"><img src="../images/hotelsantika.JPG" class="oip"></a>
					<div>
					<h3>
					<?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 26');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." <br>";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					?>
					</p>
						<div>
							<span>
								<?php
								echo "IDR ".$row['harga'];
								?>
							</span>
								<span>Bintang 3</span><br>
							<span><br>
							<?php
								echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
							?>
							</span><br>
						</div>
					</div>
					<span class="bg-bottom"></span> <span class="triangle"></span>
				</li>
				<li>
					<span class="bg-top"></span> <a href="#"><img src="../images/hotelkartikawijaya.jpg" class="oip"></a>
					<div>
					<h3>
					<?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 27');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." <br>";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					?>
					</p>
						<div>
							<span>
								<?php
								echo "IDR ".$row['harga'];
								?>
							</span>
								<span>Bintang 4</span><br>
							<span><br>
							<?php
								echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
							?>
							</span><br>
						</div>
					</div>
					<span class="bg-bottom"></span> <span class="triangle"></span>
				</li>
				<li>
					<span class="bg-top"></span> <a href="#"><img src="../images/hotelarjuna.jpg" class="oip"></a>
					<div>
					<h3>
					<?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 28');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." <br>";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					?>
					</p>
						<div>
							<span>
								<?php
								echo "IDR ".$row['harga'];
								?>
							</span>
								<span>Bintang 3</span><br>
							<span><br>
							<?php
								echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
							?>
							</span><br>
						</div>
					</div>
					<span class="bg-bottom"></span> <span class="triangle"></span>
				</li>
				<li>
					<span class="bg-top"></span> <a href="#"><img src="../images/hotelollino.jpg" class="oip"></a>
					<div>
					<h3>
					<?php
					include '../koneksi.php';

					$result=mysql_query('SELECT * FROM tb_hotel WHERE no = 29');
					$row = mysql_fetch_array($result);
					echo $row['nama_hotel']."<br>";
					?></h3>
					<p>
					<?php
					echo "Alamat ".$row['alamat']." <br>";
					echo "Jumlah kamar ".$row['jml_kamar'].". ";
					?>
					</p>
						<div>
							<span>
								<?php
								echo "IDR ".$row['harga'];
								?>
							</span>
								<span>Bintang 3</span><br>
							<span><br>
							<?php
								echo "<b><a class='pes' href='../pemesanan.php?hotel=$row[no]'>Pesan Sekarang >></a></b>";
							?>
							</span><br>
						</div>
					</div>
					<span class="bg-bottom"></span> <span class="triangle"></span>
				</li>
			</ul>
			<ul class="paging">
				<li class="first">
					<a href="opsional.php">First</a>
				</li>
				<li>
					<a href="opsional.php">1</a>
				</li>
				<li>
					<a href="opsional2.php">2</a>
				</li>
				<li>
					<a href="opsional3.php">3</a>
				</li>
				<li>
					<a href="opsional4.php">4</a>
				</li>
				<li class="selected">
					<a href="opsional5.php">5</a>
				</li>
				<li class="last">
					<a href="opsional5.php">Last</a>
				</li>
			</ul>
		</div>
		<div class="sidebar">
			<h4>Kabar Hotel</h4>
			<ul>
				<li class="selected">
					<a href="#">Hotel Bintang 5</a> <span><a href="#">Ijen Suites Resort & Convention</a></span> <span><a href="#">Tugu Malang Hotel</a></span> <span><a href="#">The Singhasari Resort</a></span> <span><a href="#">Swiss Berlinn</a></span>
				</li>
				<li class="selected">
					<a href="#">Hotel Bintang 4</a> <span><a href="#">Harriss Hotel & Conventions Malang</a></span> <span><a href="#">Royal Orchids Garden Hotel</a></span> <span><a href="#">Best Western OJ Hotel</a></span><span><a href="#">Horison Ultima Malang Hotel<span><a href="#"></a></span>
					<span><a href="#">Atria Hotel and Conference Malang</a></span> <span><a href="#">Aria Gajayana Hotel</a></span> <span><a href="#">Purnama Hotel</a></span><span><a href="#">Savana Hotel & Convention<span><a href="#"></a></span>
					<span><a href="#">MaxOne Hotel</a></span> <span><a href="#">Kartika Wijaya Hotel</a></span>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				&#169; 2015 XI RPL B.
			</p>
			<div class="connect">
				<a href="" id="googleplus">google+</a> <a href="" id="contact">contact</a> <a href="" id="facebook">facebook</a> <a href="" id="twitter">twitter</a>			</div>
		</div>
	</div>
</body>
</html>