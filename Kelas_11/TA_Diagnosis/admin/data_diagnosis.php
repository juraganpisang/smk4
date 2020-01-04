<?php
	include '../koneksi.php';
	$query = mysql_query("SELECT * FROM tb_diagnosis LIMIT $offset, $max");

?>
<!DOCTYPE html>
<html>
<head>
<title>Healtcare</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<script>
	function hapus(no){
		tanya = confirm("apakah anda yakin akan menghapus data ini?");
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
	</div>
	<div class="title">
	<br><br><br>
	<h3>Halaman Admin</h3>
	<br><br>
	<center><br><br><br>
	<div class="ref">
		<?php
		include '../koneksi.php';
		while($row = mysql_fetch_assoc($query)){
			$no = $row['no'];
			$nama = htmlentities($row['nama']);
			$alamat = htmlentities($row['alamat']);
			$umur = htmlentities($row['umur']);
			$jk = htmlentities($row['jk']);
			
			echo "No. $no<br>";
			echo "Nama : $nama<br>";
			echo "Alamat : $alamat<br>";
			echo "Umur : $umur<br>";
			echo "Jenis Kelamin : $jk<br>";
			echo "<a href=\"javascript:hapus('".$no."')\">Delete</a>";
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
<?php
include '../koneksi.php';
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$no = $_GET['no'];
		$delete = "DELETE FROM tb_diagnosis WHERE no ='$no' ";
		$sql = mysql_query($delete);
		echo"<meta http-equiv='refresh' content='0; url=data_diagnosis.php'>";
	}
	}
?>