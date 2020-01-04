<html>
<head>
	<title></title>
</head>
<?php
	include("class.php");
?>
<body>
<h3>Volume Kubus</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="sisi" placeholder="Sisi...">
<input type="submit" name="kirim" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['kirim'])){
		$sisi2 =$_POST['sisi'];		
		
			$ObjHitung = new kubus;
			$ObjHitung->sisi=$sisi2;

			echo "Sisi : ".$ObjHitung->sisi."<br/>";
			echo $ObjHitung->hitung();

}
?>
</form><br><br>
<h3>Luas Permukaan Kubus</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="sisi" placeholder="Sisi..."><br><br>
<input type="submit" name="luas" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['luas'])){
		$sisi2 =$_POST['sisi'];		
		
			$ObjHitung = new kubus;
			$ObjHitung->sisi=$sisi2;

			echo "Sisi : ".$ObjHitung->sisi."<br/>";
			echo $ObjHitung->luas();

}
?>
<br><br>
<a href="index.php"><< Kembali</a>
</body>
</html>





