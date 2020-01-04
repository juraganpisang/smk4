<?php 
echo "<b>FOR</br></b>";
echo "<b>BINTANG BESAR KE KECIL<br></b>";
for ($a=1;$a<=5;$a++)
	{
	 for ($b=5;$b>=$a;$b--)
	{
	 echo "*";
	}
	 echo "<br>";
}

echo "<b>DO..WHILE<br></b>";
$x=1;
do{
 $y=5;
	do {
		echo "*";
		$y--;
	}
	while ($y >= $x);
	echo "<br>";
	$x++;
}
	while ($x<=5);

?> 
