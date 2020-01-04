<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$nip = $_GET['nip'];
		$qdelete = "DELETE FROM pegawai WHERE nip ='$nip' ";
		$sql = mysql_query($qdelete);
	}
	if($_GET['method']=='edit')
	{
		$nip = $_GET['nip'];
		
		$baru = mysql_query("SELECT * FROM pegawai WHERE nip = '$nip'");
		while($row = mysql_fetch_assoc($baru)){
			$nip = $row['nip'];
			$nama= $row['nama'];
			$alamat = $row['alamat'];
			$telepon = $row['telepon'];
			$password = $row['password'];
			
		?>
		<html>
		<head>
		</head>
		<body>
			<form action="" method="POST" name="input">
			<fieldset class="login">
			<h2 class="">Update Data</h2><br>
			NIP : <input type="text" name="nip" value="<?php echo $nip; ?>" required></input><br><br>
			Nama : <input type="text" name="nama" value="<?php echo $nama; ?>" required></input></br><br>
			Alamat : <input type="text" name="alamat" value="<?php echo $alamat; ?>" required></input></br><br>
			Telepon : <input type="text" name="telepon" value="<?php echo $telepon; ?>" required></input></br><br>
			<input type="submit" name="update" value="SUBMIT" ></input>
			</fieldset>
			</form>
		</body>
		</html>
		
		<?php 
		if(isset($_POST['update'])){
			$nama= htmlentities($_POST['nama']);
			$alamat = htmlentities($_POST ['alamat']);
			$telepon = htmlentities($_POST ['telepon']);
			$update = mysql_query("UPDATE pegawai SET nama='".$nama."',alamat = '".$alamat."',telepon='".$telepon."' WHERE nip = '$nip'");
			if($update){
				echo"<meta http-equiv='refresh' content='0; url=home.php'>";
			}else{
				echo"GAGAL TOTAL";
			}
		}
		}
	}
}
	
		

?>