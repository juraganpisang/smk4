<html>
<head>
	<title></title>
</head>
<?php
	include("class.php");
?>
<body>
<h3>Volume Tabung</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="jari" placeholder="Jari-jari...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="kirim" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['kirim'])){
		$jari2 =$_POST['jari'];
		$tinggi2 =$_POST['tinggi'];
		
		
			$ObjHitung = new tabung;
			$ObjHitung->jari=$jari2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Jari-jari : ".$ObjHitung->jari."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->hitung();

}
?>
</form><br><br>
<h3>Luas Permukaan Tabung</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="jari" placeholder="Jari-jari...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="luas" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['luas'])){
		$jari2 =$_POST['jari'];
		$tinggi2 =$_POST['tinggi'];
		
		
			$ObjHitung = new tabung;
			$ObjHitung->jari=$jari2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Jari-jari : ".$ObjHitung->jari."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->luas();

}
?>
<br><br>
<a href="index.php"><< Kembali</a>
</body>
</html>





