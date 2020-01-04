<?php
	echo "<h4>Mengurutkan Alpabet</h4>";
	$mobil = array ("Volvo","BMW","Toyota","Suzuki","Honda","Kijang","Xenia");
	sort($mobil);
	
	$jumlah=count ($mobil);
	for ($x=0;$x<$jumlah;$x++)
	
		{
		echo $mobil[$x];
		echo "<br>";
		}
?>