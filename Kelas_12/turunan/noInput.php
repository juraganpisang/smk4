<html>
<head>
	<title></title>
</head>
<?php
class lingkaran{
	public $jari;
	public $phi = 3.14;
		function luas_lingkaran(){
		$luas = $this->phi*$this->jari*$this->jari;
		return $luas;

	}
}
	class kerucut extends lingkaran {
					public $tinggi;
				
					function volume_kerucut(){
						$volume=$this->luas_lingkaran()*$this->tinggi/3;
						return $volume;

					}		
			}
class tabung extends lingkaran{
	public $tinggi;
	function volume_tabung(){
		$volume = $this->luas_lingkaran()*$this->tinggi;
		return $volume;
	}
}
class bola extends lingkaran{
	function volume_bola(){
		$volume=$this->luas_lingkaran()*$this->jari*4/3;
		return $volume;
	}
}
			$Objkerucut = new kerucut;
			$Objkerucut->jari=7;
			$Objkerucut->tinggi=1;
?>
<table border="2">
	<tr>
		<td><?php echo "Jari-jari : ".$Objkerucut->jari."<br/>";?></td>
		<td><?php echo "Tinggi : ".$Objkerucut->tinggi."<br/>"; ?></td>
		<td><?php echo "Volume Kerucut : ".$Objkerucut->volume_kerucut()."<br/>"; ?></td>
	</tr>

<?php
			$Objtabung = new tabung;
			$Objtabung->jari=7;
			$Objtabung->tinggi=1;
?>				
	<tr>
		<td><?php echo "Jari-jari : ".$Objtabung->jari."<br/>"; ?></td>
		<td><?php echo "Tinggi : ".$Objtabung->tinggi."<br/>"; ?></td>	
		<td><?php echo "Volume Tabung : ".$Objtabung->volume_tabung()."<br/>"; ?></td>	
	</tr>			
<?php
	
			$Objbola = new bola;
			$Objbola->jari=14;
?>
	<tr>
		<td><?php echo "Jari-jari : ".$Objbola->jari."<br/>"; ?></td>
		<td><?php  ?></td>
		<td><?php echo "Volume Bola : ".$Objbola->volume_bola()."<br/>"; ?></td>
	</tr>
		
</table>
<body>
</body>
</html>





