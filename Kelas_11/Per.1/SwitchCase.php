<?php
$nilai=8.0;
switch ($nilai)
	{
	case ($nilai >= 9.0 && $nilai <=10.0);
		echo "Nilai A";
		break;
	case ($nilai >= 8.0 && $nilai <= 9.0);
		echo "Nilai B+";
		break;
	case ($nilai >= 7.0 && $nilai <= 8.0);
		echo "Nilai B";
		break;
	case ($nilai >= 6.0 && $nilai <= 7.0);
		echo "Nilai C+";
		break;
	case ($nilai >= 4.0 && $nilai <= 6.0);
		echo "Nilai C";
		break;
	case ($nilai >=0.0 && $nilai <=4.0);
		echo "Nilai D";
		break;
	default:
		echo "Nilai Anda LUAR BIASA!!";
	}
?>