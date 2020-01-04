<?php
$sambung= mysql_connect("localhost","root","")or die("GAGAL KONEKSI");
$sql = mysql_select_db("ta") //or die("GAGAL");
?>
<?php
if (isset ($_GET['page'])) {
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
?>
<?php
	//Set Maximum Content for each page
	$max = 4;
	//Set Offset each page
	$offset = ($page - 1) * $max;
?>