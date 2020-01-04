<?php
	include '../koneksi.php';
	$query = mysql_query("SELECT * FROM tb_artikel LIMIT $offset, $max");
	$quer = mysql_query("SELECT * FROM tb_artikel_penyakit LIMIT $offset, $max");
?>
<!DOCTYPE html>
<html>
<head>
<title>Healtcare</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<script>
	function hapus(no){
		tanya = confirm("apakah anda yakin akan menghapus artikel ini?");
		if(tanya== true)
		{
			window.location.href="?method=hapus&no="+no;
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
	<?php
include '../koneksi.php';
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$no = $_GET['no'];
		$delete = "DELETE FROM tb_artikel WHERE no ='$no' ";
		$sql = mysql_query($delete);
		echo"<meta http-equiv='refresh' content='0; url=data_artikel.php'>";
	}
	if($_GET['method']=='edit')
	{
		$no = $_GET['no'];
		
		$baru = mysql_query("SELECT * FROM tb_artikel WHERE no = '$no'");
		while($row = mysql_fetch_assoc($baru)){
			$judul = $row['judul'];
			$artikel = $row ['artikel'];
			$kategori = $row ['kategori'];
			
		?>
	<center>
	<h3>HALAMAN EDIT ARTIKEL</h3>
	<BR>
	<form action="" method="POST">
	JUDUL ARTIKEL<br>
	<input type="text" name="judul" placeholder="JUDUL ARTIKEL" class="uj" value="<?php echo $judul ?>" required><br><br>
	ISI DARI ARTIKEL<br>
	<textarea name="artikel" placeholder="ISI ARTIKEL" required><?php echo $artikel ?></textarea><br><br>
	KATEGORI ARTIKEL<br>
	<input type="text" name="kategori" class="uj" placeholder="KATEGORI PENYAKIT" value="<?php echo $kategori ?>"><br>
	Contoh : sakit kepala, sesak nafas dll.<br><br>
	<input type="submit" name="update" value="Perbarui">
	</form>
	</center>
		<?php 
		if(isset($_POST['update'])){
			$judul= $_POST['judul'];
			$artikel = $_POST ['artikel'];
			$kategori = $_POST ['kategori'];
			$update = mysql_query("UPDATE tb_artikel SET judul='$judul', artikel='$artikel', kategori='$kategori' WHERE no = '$no'");
			if($update){
				echo"<script>alert('Artikel Berhasil Diperbarui');</script>
				<meta http-equiv='refresh' content='0; url=data_artikel.php'>";
			}else{
				echo"GAGAL TOTAL";
			}
		}
		}
	}
}
?><br><br><br>
	</div>
	<div class="title">
	<h3>Halaman Admin</h3>
	<br><br><br>
	<center>
	<H4><a href="tambah_artikel.php">+TAMBAH ARTIKEL</a></H4>
	<div class="ref">
	<?php
		include '../koneksi.php';
		while($row=mysql_fetch_assoc($quer)){
			$no = $row['no'];
			$judul = $row['judul'];
			$artikel = $row['artikel'];
			
			echo "<p>No.$no</p><br>";
			echo "<p><a class='fot'>Judul</a><br>$judul</p><br>";
			echo "<p><a class='fot'>Artikel</a><br>$artikel</p><br>";
			echo "<a href=\"javascript:hapus('".$no."')\">Delete</a> || <a href='?method=edit&no=$no'>Edit</a>";
			echo "<hr>";
		}
	?>
		<?php
			include '../koneksi.php';
		while($row = mysql_fetch_assoc($query)){
			$no = htmlentities($row['no']);
			$judul = htmlentities($row['judul']);
			$artikel = htmlentities($row['artikel']);
			$kategori = htmlentities($row['kategori']);
			
			echo "<p>No.$no</p><br>";
			echo "<p><a class='fot'>Judul</a><br>$judul</p><br>";
			echo "<p><a class='fot'>Artikel</a><br>$artikel</p><br>";
			echo "<p><a class='fot'>Kategori</a><br>$kategori</p><br>";
			echo "<a href=\"javascript:hapus('".$no."')\">Delete</a> || <a href='?method=edit&no=$no'>Edit</a>";
			echo "<hr>";
		}
	?>
	<?php
include '../koneksi.php';

		//Paging Query
		$pageQuery = mysql_query("SELECT COUNT(*) as total FROM tb_artikel");
		$jumlah = mysql_fetch_assoc($pageQuery);
		
		//Total Page
		$totalPage = ceil($jumlah['total']/$max);
		
		//Prev Link
		if($page > 1) {
			echo "<a href='?page=".($page-1)."'>Prev</a>";
		}
		
		//Pages Link
		for ($i = 1; $i <= $totalPage; $i++) {
			if ($i == $page) {
				echo "<b>\t$i<b/>";
			}
			else {
				echo "<a href='?page=$i'>\t$i</a>";
			}
			}
			
		//Next Link
		if ($page < $totalPage) {
			echo "<a href='?page=".($page+1)."'>\tNext</a>";
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