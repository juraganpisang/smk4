<?php
//Mencari 100 bil. genap dan ganjil
$a=2;
echo "<b>DO...WHILE<br></b>";
echo "Bilangan genap<br>";
do {
echo "$a &nbsp";
$a+=2;
}
while ($a<=100);
	echo "<br>";
	
$a=1;
echo "Bilangan ganjil<br>";
do {
echo "$a &nbsp";
$a+=2;
}
while ($a<=100);
	echo "<br>";
	
	
$as=2;
echo "<b>FOR<br></b>";
echo "Bilangan genap<br>";
for ($as;$as<=100;)
{
	echo "$as &nbsp";
	$as+=2;
}
	echo "<br>";
$aq=1;
echo "Bilangan ganjil<br>";
for ($aq;$aq<=100;)
{
	echo "$aq &nbsp";
	$aq+=2;
}
?>