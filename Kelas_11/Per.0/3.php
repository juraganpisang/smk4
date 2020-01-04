<?php
	$z=5;
	switch ($z)//variabel
	{
	case 0://nilai
		echo "Nilai pertama<br>";//pernyataan
		break;
	case 1:
		echo "Nilai kedua<br>";
		break;
	case 2:
		echo "Nilai ketiga<br>";
		break;
	default:
		echo "Salah ketik";
		
	}
	switch ($c)
	{
	case 0:
	case 1:
	case 2:
	case 3:
		echo "Nilai 1-3<br>";
		break;
	case 4:
	case 5:
	case 6:
		echo "Nilai 4-6<br>";
		break;
	case 7:
	case 8:
	case 9:
		echo "Nilai 7-9<br>";
		break;
	}
?>