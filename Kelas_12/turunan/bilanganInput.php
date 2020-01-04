<html>
<head>
	<title></title>
</head>
<?php
	class lingkaran {
		public $jari;
		public $phi = 3.14;
		function luas_lingkaran(){
			$luas = $this->phi*$this->jari*$this->jari;
			return $luas;
		}
	}
	class kerucut extends lingkaran{
		
		public $tinggi;	

		function volume_kerucut(){
			$volume= $this->luas_lingkaran()*$this->tinggi/3;
			return $volume;

		}				
	}
	class tabung extends lingkaran{
		public $tinggi;
		function volume_tabung(){
			$volume= $this->luas_lingkaran()*$this->tinggi;
			return $volume;
		}

	}
	class bola extends lingkaran{
		function volume_bola(){
			$volume=$this->luas_lingkaran()*$this->jari*4/3;
			return $volume;
		}
	}
	echo "<h1>Volume Kerucut, Tabung, Bola</h1>";
	
?>
<body>
<table>
	<tr>
		<td><strong>Volume Kerucut</strong></td>
		<form action="" method="POST" name="input">
		<td><input type="number" name="jari" placeholder="Jari-jari"></td>
		<td><input type="number" name="tinggi" placeholder="Tinggi"></td>
		<td><input type="submit" name="kirim" value="Hasil"></input></td>
	</tr>



<?php
		if (isset($_POST['kirim'])){
		$jari2 =$_POST['jari'];
		$tinggi2 =$_POST['tinggi'];
		
			$objKerucut = new kerucut;
			$objKerucut->jari=$jari2;
			$objKerucut->tinggi=$tinggi2;
			echo "Jari-jari : ".$objKerucut->jari."<br/>";
			echo "Tinggi : ".$objKerucut->tinggi."<br/>";
			echo "Volume Kerucut : ".$objKerucut->volume_kerucut()."<br/>";

}
?>
</form><br><br>
<tr>
	<td><strong>Volume Tabung</strong></td>
	<form action="" method="POST" name="input">
	<td><input type="number" name="jari" placeholder="Jari-jari"></td>
	<td><input type="number" name="tinggi" placeholder="Tinggi"></td>
	<td><input type="submit" name="kirimTabung" value="Hasil"></input></td>
</tr>
<?php
		if (isset($_POST['kirimTabung'])){
		$jari2 =$_POST['jari'];
		$tinggi2 =$_POST['tinggi'];
		
			$objTabung = new tabung;
			$objTabung->jari=$jari2;
			$objTabung->tinggi=$tinggi2;
			echo "Jari-jari : ".$objTabung->jari."<br/>";
			echo "Tinggi : ".$objTabung->tinggi."<br/>";
			echo "Volume Tabung : ".$objTabung->volume_tabung()."<br/>";

}
?>
</form>
<tr>
	<td><strong>Volume Bola</strong></td>
	<form action="" method="POST" name="input">
	<td><input type="number" name="jari" placeholder="Jari-jari"></td>
	<td></td>
	<td><input type="submit" name="kirimBola" value="Hasil"></input></td>
</form>
<?php
		if (isset($_POST['kirimBola'])){
		$jari2 =$_POST['jari'];
		
			$objBola = new bola;
			$objBola->jari=$jari2;
			echo "Jari-jari : ".$objBola->jari."<br/>";
			echo "Volume Bola : ".$objBola->volume_bola()."<br/>";

}
?>
</form>
</table>
</body>
</html>





