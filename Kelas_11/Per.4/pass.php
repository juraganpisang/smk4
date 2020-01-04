<?php
$pass = "aaa";
$acak = "bbb";


$md= md5($pass);
echo "md5= $md<br>";
$mda= md5 ($acak.md5($pass).md5($acak));
echo "mda= $mda<br><br>";

$var= crypt ($pass, $acak);
echo "var= $var<br>";
$vir= crypt ($pass,$var);
echo "vir= $vir<br>";
if ($var==$vir)
echo "Password Benar";

?>