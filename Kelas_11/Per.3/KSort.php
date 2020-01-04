<?php
	echo "<h4>ASSOSIATIF</h4>";
	$mobil=array ("Volvo","BMW","Toyota","Suzuki","Honda","Kijang","Xenia");
	ksort($mobil);
	
	$jumlah=count ($mobil);
	for ($x=0;$x<$jumlah;$x++)
	
		{
		echo $mobil[$x];
		echo "<br>";
		}
		
	echo "<h4>NUMERIS</h4>";
	$age=array ("Mei"=>"43","Said"=>"31","Ndrew"=>"75","Val"=>"25");
	ksort($age);
	
	foreach ($age as $x=>$x_value)
		{
			echo "Nama = " . $x. "<br>Umur = " .$x_value;
			echo "<br>";
		}
?>