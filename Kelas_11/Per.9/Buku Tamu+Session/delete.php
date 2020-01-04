<style>
	.tols {
			width:200px;
			height:30px;
			text-align:center;
			border-radius:5px;
			font-family:segoe ui;
			font-weight:bold;
			color:black;
	}
	.terserah {
			width :200px;
			height : 70px
	}
	#send {
			width:100px;
			height:30px;
			text-align:center;
			border-radius:5px;
			border:solid 1px brown;
			font-family:segoe ui;
			background-color :brown;
			color:white;
		}
	#send:hover {
			background-color: red;
	}
	.we {
		background : white;
	}
</style>
<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$id = $_GET['id'];
		$delete = "DELETE FROM tb_bukutamu WHERE id ='$id' ";
		$sql = mysql_query($delete);
	}
	if($_GET['method']=='edit')
	{
		$id = $_GET['id'];
		
		$baru = mysql_query("SELECT * FROM tb_bukutamu WHERE id = '$id'");
		while($row = mysql_fetch_assoc($baru)){
			$nama= $row['nama'];
			$email = $row ['email'];
			$komentar = $row ['komentar'];
			
?>
		<html>
		<head>
		<style>
	
		</style>
		</head>
		<body>
		<form action="" method="POST" name="input">
		<br><br><br><br><br><br><br>
			<center>
			<fieldset class="we">
			<h2>Pengisian Ulang Buku Tamu</h2>
			<form action ="simpan.php" method="POST" name="input">
				<input type="text" name="nama" placeholder="Username" class="tols" value="<?php echo $nama; ?>" required><br><br>
				<input type="email" name="email" placeholder="Email" class="tols" value="<?php echo $email; ?>" required><br><br>
				<textarea name="komentar" class="terserah" placeholder="Komentar"required><?php echo $komentar; ?></textarea><br><br>
			<input type="submit" name="update" value="SUBMIT" id="send"></input><input type="reset" name="reset" value="RESET" id="send"></input>
			</fieldset>
			<br><br><br><br><br><br><br><br><br><br><br>
			</form>
			
			</center>
			</body>
		</html>
		
		<?php 
		if(isset($_POST['update'])){
			$nama= htmlentities($_POST['nama']);
			$email = htmlentities($_POST ['email']);
			$komentar = htmlentities($_POST ['komentar']);
			$update = mysql_query("UPDATE tb_bukutamu SET nama='$nama', email='$email', komentar='$komentar' WHERE id = '$id'");
			if($update){
				echo"<meta http-equiv='refresh' content='0; url=daftar.php'>";
			}else{
				echo"GAGAL TOTAL";
			}
		}
		}
	}
}
		

?>

