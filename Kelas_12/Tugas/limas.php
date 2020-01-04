<html>
<head>
	<title></title>
</head>
<?php
	include("class.php");
?>
<body>
<h3>Volume Balok</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="sisi" placeholder="Sisi...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="kirim" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['kirim'])){
		$sisi2 =$_POST['sisi'];	
		$tinggi2 =$_POST['tinggi'];		
		
			$ObjHitung = new limas;
			$ObjHitung->sisi=$sisi2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Sisi : ".$ObjHitung->sisi."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->hitung();
			

}
?>
</form><br><br>
<h3>Luas Permukaan Balok</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="sisi" placeholder="Sisi...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="luas" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['luas'])){
		$sisi2 =$_POST['sisi'];	
		$tinggi2 =$_POST['tinggi'];		
		
			$ObjHitung = new limas;
			$ObjHitung->sisi=$sisi2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Sisi : ".$ObjHitung->sisi."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->luas();

}
?>
<br><br>
<a href="index.php"><< Kembali</a>
</body>
</html>





