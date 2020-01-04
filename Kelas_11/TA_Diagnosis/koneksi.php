<?php
	$db="ta_diagnosis";
	$sambung=mysql_connect("localhost","root","");
	$pilih_db= mysql_select_db($db);

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	
	$max = 5;
	$offset = ($page - 1) * $max;
?>