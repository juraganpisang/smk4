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
<input type="number" name="panjang" placeholder="Panjang...">
<input type="number" name="lebar" placeholder="Lebar...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="kirim" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['kirim'])){
		$panjang2 =$_POST['panjang'];
		$lebar2 =$_POST['lebar'];
		$tinggi2 =$_POST['tinggi'];
		
		
			$ObjHitung = new balok;
			$ObjHitung->panjang=$panjang2;
			$ObjHitung->lebar=$lebar2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Panjang : ".$ObjHitung->panjang."<br/>";
			echo "Lebar : ".$ObjHitung->lebar."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->hitung();

}
?>
</form><br><br>
<h3>Luas Permukaan Balok</h3><br>
<form action="" method="POST" name="input">
<input type="number" name="panjang" placeholder="Panjang...">
<input type="number" name="lebar" placeholder="Lebar...">
<input type="number" name="tinggi" placeholder="Tinggi..."><br><br>
<input type="submit" name="luas" value="KIRIM"></input><br><br>
<?php
		if (isset($_POST['luas'])){
		$panjang2 =$_POST['panjang'];
		$lebar2 =$_POST['lebar'];
		$tinggi2 =$_POST['tinggi'];
		
		
			$ObjHitung = new balok;
			$ObjHitung->panjang=$panjang2;
			$ObjHitung->lebar=$lebar2;
			$ObjHitung->tinggi=$tinggi2;

			echo "Panjang : ".$ObjHitung->panjang."<br/>";
			echo "Lebar : ".$ObjHitung->lebar."<br/>";
			echo "Tinggi : ".$ObjHitung->tinggi."<br/>";
			echo $ObjHitung->luas();

}
?>
<br><br>
<a href="index.php"><< Kembali</a>
</body>
</html>





