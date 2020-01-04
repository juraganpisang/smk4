<?php
$nilai=4.1;
	if ($nilai >= 9.0 && $nilai <=10.0)
		{
		echo "Nilai Anda A";
		}
	elseif ($nilai >= 8.0 && $nilai <= 9.0)
		{
		echo "Nilai Anda B+";
		}
	elseif ($nilai >= 7.0 && $nilai <= 8.0)
		{
		echo "Nilai Anda B";
		}
	elseif ($nilai >= 6.0 && $nilai <= 7.0)
		{
		echo "Nilai Anda C+";
		}
	elseif ($nilai > 4.0 && $nilai <= 6.0)
		{
		echo "Nilai Anda C";
		}
	elseif ($nilai >=0.0 && $nilai <=4.0)
		{
		echo "Nilai Anda D";
		}
	else
		{
			echo "Nilai Anda LUAR BIASA!!";
		}
?>