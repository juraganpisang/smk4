<?php
	//Penggabungan Array
	//Menggabungkan 2 atau lebih array jadi 1
	$array0 = array (1,2,3,4,5);
	$array1 = array ("Senin","Selasa","Rabu");//hari
	$array2 = array ("Januari","Februari","Maret");//bulan
	$array3 = array (1996,1997,1998,1999);//tahun
	
	$gabung = array_merge ($array0, $array1, $array2, $array3);
	
	echo "<b>Penggabungan Array </b><br>";
	foreach($gabung as $val)
	
	{
	echo "$val<br><hr>";
	}
?>