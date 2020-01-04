<style>
	.form{
		margin:0;
		color:#555;
		font-weight: bold;
		margin: auto;
		width:330px;
		height: auto;
		padding:20px 10px;
		float: left;
		text-align: center;
	}
	body {
	background: #272822;
	}
	fieldset {
		border : 4px solid white;
		border-radius : 5px;
		background : grey;
		color : black;
		width : 600px;
		padding : 10px;
		margin-left : 250px;
	}
</style>
<center>
<div class="form">
<fieldset>
<?php
echo "<center>";
error_reporting(0);
	if (isset($_POST['kirim1'])) {
		$dir="img/";
		$nama_file=$_FILES['file']['name'];
	
	if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		$cek = move_uploaded_file ($_FILES['file']['tmp_name'], $dir. $nama_file);
		if($cek) {
			echo "<img src='img/$nama_file'><br><br>";
			}
	}
}
echo "<br>";
if (isset($_POST['kirim1'])) {
	$nama = $_POST ['nama'];
	echo "<b>Nama Anda : $nama</b><br>";
}
echo "<br>";
echo "<br>";
if (isset($_POST['kirim1'])) {
	$ala = $_POST ['ala'];
	echo "<b>Alamat Anda : $ala</b><br>";
}
echo "<br>";
echo "<br>";
if (isset($_POST['kirim1'])) {
	$ttl1 = $_POST ['ttl1'];
	$ttl2 = $_POST ['ttl2'];
	$ttl3 = $_POST ['ttl3'];
	$ttl4 = $_POST ['ttl4'];
	echo "<b>Tempat Tanggal Lahir Anda : $ttl1, $ttl2 - $ttl3 - $ttl4</b><br>";
}
echo "<br>";
echo "<br>";
if (isset($_POST['kirim1'])) {
	$jen = $_POST ['jen'];
	echo "<b>Jenis Kelamin Anda : $jen</b><br>";
}
echo "<br>";
echo "<br>";
if (isset($_POST ['kirim1'])){
	$jurusan = $_POST['jurusan'];
	echo "<b>Jurusan Anda : $jurusan</b><br>";
}
echo "<br>";
echo "<br>";
if (isset($_POST['kirim1'])) {
	echo "<b>Anda Ingin PSG di Daerah : <br>";
	if (isset($_POST['jar1'])) {
		echo "- ".$_POST['jar1']."<br>";
	}
	if (isset($_POST['jar2'])) {
		echo "- ".$_POST['jar2']."<br>";
	}
	if (isset($_POST['jar3'])) {
		echo "- ".$_POST['jar3']."<br>";
	}
	if (isset($_POST['jar4'])) {
		echo "- ".$_POST['jar4']."<br>";
	}
	if (isset($_POST['jar5'])) {
		echo "- ".$_POST['jar5']."<br>";
	}
	if (isset($_POST['jar6'])) {
		echo "- ".$_POST['jar6']."<br>";
	}
}
echo "<br>";
echo "<br>";
if (isset($_POST['kirim1'])) {
	$cita = $_POST ['cita'];
	echo "<b>Cita Cita Anda : $cita<br></b>";
}
echo "<br>";
echo "<br>";
echo "</center>";
?>
</div>
</fieldset>
</center>