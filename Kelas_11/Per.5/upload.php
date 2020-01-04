<?php
	if (isset($_POST['upload'])) {
		$dir="images/";
		$nama_file=$_FILES['file']['name'];
	
	if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		$cek = move_uploaded_file ($_FILES['file']['tmp_name'], $dir. $nama_file);
		if($cek) {
			echo "<img src='images/$nama_file' name='gambar'>";
			}
		else{
			die ("FILE GAGAL DIUPLOAD");
			}
	}
	}
?>