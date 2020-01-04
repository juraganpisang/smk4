<?php
	$a=2;
	$b=3;
	$c=4;
	
	if (($a<$b)&&($c<$b))//FALSE
		echo "BENAR<br>";
	else
		echo "SALAH<br>";
	
	if (($a<$b)||($c<$b))//TRUE
		echo "BENAR<br>";
	else
		echo "SALAH<br>";
		
	if (($a>$b)&&($c>$b))//FALSE
	{
		echo "BENAR<br>";
		echo "BENAR juga<br>";
	}
	elseif ($c>$a)
		echo "SALAH juga<br>";
	else
		echo "SALAH<br>";
?>