<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$id = $_GET['id'];
		$qdelete = "DELETE FROM tb_bukutamu WHERE id_bukutamu ='$id' ";
		$sql = mysql_query($qdelete);
	}
	if($_GET['method']=='edit')
	{
		$id = $_GET['id'];
		
		$baru = mysql_query("SELECT * FROM tb_bukutamu WHERE id_bukutamu = '$id'");
		while($row = mysql_fetch_assoc($baru)){
			$nama= $row['nama'];
			$email = $row ['email'];
			$komentar = $row ['komentar'];
			
		?>
		<html>
		<head>
		</head>
		<body>
			<form action="" method="POST" name="input">
			<fieldset class="login">
			<h2 class="">Update Data</h2><br>
			Nama : <input type="text" name="nama" value="<?php echo $nama; ?>" class="login-input" required></input></br><br>
			Email : <input type="text" name="email" value="<?php echo $email; ?>" class="login-input" required></input></br><br>
			Komentar : <textarea input type="text" name="komentar" class="login-input" required ><?php echo $komentar; ?></textarea></br><br>
			<input type="submit" name="update" value="SUBMIT" class="login-submit"></input>
			</fieldset>
			</form>
		</body>
		</html>
		
		<?php 
		if(isset($_POST['update'])){
			$nama= htmlentities($_POST['nama']);
			$email = htmlentities($_POST ['email']);
			$komentar = htmlentities($_POST ['komentar']);
			$update = mysql_query("UPDATE tb_bukutamu SET nama='".$nama."',email = '".$email."',komentar='".$komentar."' WHERE id_bukutamu = '$id'");
			if($update){
				echo"<meta http-equiv='refesh' content='0; url=home.php'>";
			}else{
				echo"GAGAL TOTAL";
			}
		}
		}
	}
}
	
		

?>

