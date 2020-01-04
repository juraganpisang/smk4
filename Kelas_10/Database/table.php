<!DOCTYPE HTML>
<html>
<head>
	<title>Menciptakan Tabel</title>
</head>  
<body>
<?php require_once './koneksi_baru.php';  
$sql = 'CREATE TABLE Siswa (
	Nama VARCHAR(30) NOT NULL,         
	Username VARCHAR(12) NOT NULL,         
	Password VARCHAR(12) NOT NULL,
	Email VARCHAR (30) NOT NULL,
	PRIMARY KEY (Nama)         
	) 
	ENGINE=MyISAM;';  
	$res = mysql_query($sql); 
	if ($res) {   
	echo 'Tabel Created';   
	mysql_close($res); 
	} 
	else {   
	echo mysql_error(); 
	}  
?>  
</body>
</html>  