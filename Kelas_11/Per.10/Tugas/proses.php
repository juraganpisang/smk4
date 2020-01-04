<?php
	require_once("koneksi.php");

	$doc = $_FILES['doc'];
	$docName = $doc['name'];
	$docType = $doc['type'];
	$docSize = $doc['size'];
	$docTemp = $doc['tmp_name'];
	
	
	$uploadDir = "image/".$docName;
	
	//Membatasi file Gambar tok!!!
	if($docType == 'image/jpeg' or $docType == 'image/pjpeg' or $docType == 'image/png' 
	or $docType == 'image/bmp' or $docType == 'image/gif' or $docType == 'image/jpg'
	or $docType == 'image/JPG' or $docType == 'image/JPEG'	)
	{
		//Membatasi ukuran file!!
		if ($docSize <= 1000000) {
		$query = mysql_query("INSERT INTO tb_updown (nama_file, direktori) VALUES ('$docName','$uploadDir')");
			echo "<br><a href='list_download.php'>LIST DOWNLOAD</a>
			<br><a href='$uploadDir'>Download File</a>";
			$upload = move_uploaded_file ($docTemp, $uploadDir);
		}
		else{
			echo "<br><script type='text/javascript'> alert ('Ukuran Gambarnya Melebihi 1MB')</script>
			<a href='index.php'>Kembali";
		}
	}else{
		echo "<br><script type='text/javascript'> alert ('Tidak Bisa, Hanya File Gambar Yang Bisa Upload')</script>
		<a href='index.php'>Kembali";
	}
?>