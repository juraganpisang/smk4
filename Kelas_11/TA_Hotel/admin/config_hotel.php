<?php
error_reporting(0);
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$no = $_GET['no'];
		$qdelete = "DELETE FROM tb_hotel WHERE no ='$no' ";
		$sql = mysql_query($qdelete);
		echo"<meta http-equiv='refresh' content='0; url=hotel.php'>";
	}
}
	if($_GET['method']=='edit')
	{
		$no = $_GET['no'];
		
		$baru = mysql_query("SELECT * FROM tb_hotel WHERE no = '$no'");
		while($row = mysql_fetch_assoc($baru)){
			$nama_hotel= $row['nama_hotel'];
			$alamat = $row['alamat'];
			$jml_kamar = $row['jml_kamar'];
			$keterangan = $row['keterangan'];
			$harga = $row['harga'];
?>
		<br><br><br><br><br><br><br>
			<center>
			<fieldset>
			<br>
			<h2>Update Hotel!</h2>
			<form action ="" method="POST" name="input">
			Nama Hotel <br>
			<input type="text" name="nama_hotel" class="grrr" placeholder="Nama Hotel" class="gr" value="<?php echo $nama_hotel; ?>" required><br><br>
			Alamat Hotel <br>
			<textarea name="alamat" placeholder="Alamat Hotel" class="pog" required ><?php echo $alamat; ?></textarea><br><br>
			Jumlah Kamar <br>
			<input type="text" name="jml_kamar" placeholder="Jumlah Kamar di Hotel" class="grrr" value="<?php echo $jml_kamar; ?>" required><br><br>
			Keterangan Hotel (Opsional)<br>
			<textarea name="keterangan" class="pog" ><?php echo $row['keterangan']; ?></textarea><br><br>
			Harga Hotel <br>
			<input type="text" name="harga" placeholder="Harga Hotel" class="grrr" value="<?php echo $harga; ?>" required><br><br>
			<input type="submit" name="update" class="update" value="UPDATE">
			<input type="reset" name="reset" class="reset" value="RESET">
			</form>
			<br><br><br>
			</fieldset>
			<br><br><br><br><br><br>
			</center>		
		<?php 
		if(isset($_POST['update'])){
			$nama_hotel= htmlentities($_POST['nama_hotel']);
			$alamat = htmlentities($_POST['alamat']);
			$jml_kamar = htmlentities($_POST['jml_kamar']);
			$keterangan = htmlentities($_POST['keterangan']);
			$harga = htmlentities($_POST['harga']);
			$update = mysql_query("UPDATE tb_hotel SET nama_hotel='$nama_hotel', alamat='$alamat', jml_kamar='$jml_kamar', keterangan='$keterangan',
			harga='$harga' WHERE no = '$no'");
			if($update){
			?>
				<script>alert('Hotel Berhasil di Update');
				window.location='hotel.php'</script>
			<?php
			}else{
			?>
				<script>alert('Hotel Gagal di Update');</script>
			<?php
			}
		}
		}
	}	

?>
