<?php 
	// Catatan: // Jika perlu, sesuaikan nama user dan password  
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'mysql';
	
	$cn = mysql_connect($host, $user, $pass);
	if (!$cn)
	{
	exit('Koneksi Gagal');
	}
	
	$db = mysql_select_db($db);
	if (!$db)
	{   
	exit('Gagal Memilih Database'); 
	}  
?>