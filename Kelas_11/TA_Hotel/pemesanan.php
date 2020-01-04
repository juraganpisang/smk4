<?php
	include 'koneksi.php';
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotelme!~</title>
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/simplepicker-1.0.0.min.css"/>
    <link type ="text/css" rel="stylesheet" href="css/codemirror.css" charset="utf-8" media="all">  
    <link type ="text/css" rel="stylesheet" href="css/monokai.css" charset="utf-8" media="all"> 
    <script type="text/javascript"  src="js/jquery-1.9.0.1.min.js"></script>  
    <script src="js/codemirror.js" type="text/javascript" charset="utf-8" ></script>
    <script src="js/clike.js" type="text/javascript" charset="utf-8" ></script>
    <script src="js/xml.js" type="text/javascript" charset="utf-8" ></script>
    <script src="js/javascript.js" type="text/javascript" charset="utf-8" ></script>
    <script src="js/htmlmixed.js" type="text/javascript" charset="utf-8" ></script>
    <script src="js/php.js" type="text/javascript" charset="utf-8" ></script>
    <script type="text/javascript"  src="js/simplepicker-1.0.0.min.js"></script>
    <script type="text/javascript"  src="js/script.js"></script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" width="100px"></a>
			<ul>
				<li>
					<a href="index.php">Beranda</a>
				</li>
				<li>
					<a href="user/rekomendasi.php">Rekomendasi</a>
				</li>
				<li>
					<a href="user/opsional.php">Opsional</a>
				</li>
				<li class="selected">
					<a href="pemesanan.php">Pemesanan</a>
				</li>
				<li>
					<a href="admin/loginadmin.php">Login Admin*</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="about">
	<h3>Pemesanan Hotel</h3><br><br><br>
	<fieldset class="asd">
	<center>
		<form action="" method="POST" name="input">
		<br><br><br>
			<a class="fot">Nama Lengkap</a><br>
			<input type="text" name="nama" placeholder="" class="grr" required><br>
			<a class="war">Isi dengan Nama Lengkap Anda</a><br><br>
			<a class="fot">No Telpon</a><br>
			<input type="text" name="no_telp" class="grr" required><br>
			<a class="war">Contoh: +62812345678, <br>untuk Kode Negara (+62) dan <br>No. Handphone 0812345678</a><br><br>
			<a class="fot">Alamat Email</a><br>
			<input type="email" name="email" class="grr"><br>
			<a class="war">Contoh : email@example.com</a>
                <br><br>
			<a class="fot">Hotel yang Dipesan</a> <br>
			<select class="grrr" name="hotel_dipesan">
				  <?php
				  $query = "select * from tb_hotel";
				  $result = mysql_query($query);
				  $hotel = "select * from tb_hotel where no = ".$_GET['hotel'];
				  $hotel_result = mysql_query($hotel);
				  $data_hotel = mysql_fetch_array($hotel_result);
				  
				  while($row = mysql_fetch_array($result)) {
				  ?>
				  <option class="grrr" value="<?php echo $row['nama_hotel']?>" <?php echo ($row['nama_hotel'] == $data_hotel['nama_hotel'] ? 'selected' : ''); ?>> <?php echo $row['nama_hotel']?> </option>
				  <?php } ?>
			</select>
			<br><br>
			<a class="fot">Tanggal Check In</a><br>
			<input type="text" id="d-hun" name="check_in" class="gr" autocomplete="off" required><br>
			<a class="war">Contoh : 25-10-2015</a><br><br>
			<a class="fot">Tanggal Check Out</a><br>
			<input type="text" id="d-am" name="check_out" class="gr" autocomplete="off" required><br>
			<a class="war">Contoh : 25-10-2015</a><br><br>
			<a class="fot">Jumlah Kamar</a><br>
			<input type="text" name="jml_kamar" class="gr" required><br><br>
			<a class="fot">Permintaan Khusus (Opsional)</a><br>
			<textarea name="permintaan_khusus" class="pog"></textarea><br><br><br>
			<input type="submit" name="kirim" class="kirim" value="Kirim Data">
			<input type="reset" class="gagal" value="Batal">
			<br><br><br><br><br>
		</form>
		</center>
	</fieldset>
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
<?php
	include 'koneksi.php';
	
	if (isset($_POST['kirim'])) {
		$nama = htmlentities($_POST['nama']);
		$no = htmlentities($_POST['no_telp']);
		$email = htmlentities($_POST['email']);
		$hotel_dipesan = htmlentities($_POST['hotel_dipesan']);
		$check_in = htmlentities($_POST['check_in']);
		$check_out = htmlentities($_POST['check_out']);
		if ($check_in > $check_out) {
			echo "<script>alert('Tanggal Check Out tidak boleh kurang dari Tanggal Check In')</script>";
			die();
			echo "<meta http-equiv='refresh' content='0; url=pemesanan.php?hotel= ".$_GET['hotel']."'>";
		}
		$jmlkamar = htmlentities($_POST['jml_kamar']);
		$permintaan = htmlentities($_POST['permintaan_khusus']);
		//Cara Menambah di Database
		$hotel = "select * from tb_hotel where no = ".$_GET['hotel'];
		$hotel_result = mysql_query($hotel);
		$data_hotel = mysql_fetch_array($hotel_result);
		$inc_hotel = $data_hotel['banyak_pemesan']+1;
		//Cara mendapatkan nilai / menset
		$update = mysql_query("update tb_hotel set banyak_pemesan = $inc_hotel where no = ".$_GET['hotel']);
		
		$sql = ("INSERT INTO tb_pemesanan (nama, no_telp, email, hotel_dipesan, check_in, check_out, jml_kamar, permintaan_khusus) 
		VALUES ('$nama','$no','$email','$hotel_dipesan','$check_in','$check_out','$jmlkamar','$permintaan')");
		$hasil = mysql_query($sql);
		if ($hasil) {
			echo "<script>alert('Data Sudah Kami Terima Silahkan Ke Langkah Berikutnya');window.location='user/transaksi.php?nama=$nama'</script>";
		} else {
			echo "<script>alert('Data Gagal Dikirim')</script>";
			}
		}
?>