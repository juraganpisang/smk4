<?php
	require_once("koneksi.php");

	$doc = $_FILES['doc'];
	$docName = $doc['name'];
	$docType = $doc['type'];
	$docSize = $doc['size'];
	$docTemp = $doc['tmp_name'];
	
	print_r($doc);
	$uploadDir = "image/".$docName;
	
	$upload = move_uploaded_file($docTemp, $uploadDir);
	
	$query = mysql_query("INSERT INTO tb_updown (nama_file, direktori) VALUES ('$docName','$uploadDir')");
	
	if ($query) {
		echo "<br><a href='list_download.php'>LIST DOWNLOAD</a>";
	}
	
	echo "<br><a href='$uploadDir'>Download File</a>"
?>