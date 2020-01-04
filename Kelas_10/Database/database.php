<!DOCTYPE HTML>
<html>
<head>
	<title>Menciptakan Database</title>
</head>  
<body>  
	<?php
	require_once './koneksi.php';  
 
	$res = mysql_query('CREATE DATABASE Army');
	if ($res) {
		echo 'Database be Created';
		@mysql_close($res);
	}
	else 
	{
	echo mysql_error(); 
	}
	?>  
</body>
</html>