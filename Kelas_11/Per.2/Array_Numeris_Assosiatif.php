<?php
//Array untuk menampilkan nama nama hari
//Array numeris; array assosiatif; array multidimensi

//numeris (pemanggilannya menggunakan angka)
$hari [0] = "Minggu";
$hari [1] = "Senin";
$hari [2] = "Selasa";
$hari [3] = "Rabu";
$hari [4] = "Kamis";
$hari [5] = "Jumat";
$hari [6] = "Sabtu";

echo "Macam macam nama hari : <br>";
	for ($i=0; $i <=6; $i++) {
	echo "$hari[$i]<br>";
	}
	echo "<br>";
	
//assosiatif (pemanggilannya menggunakan huruf)
$umur ['andrew']="132";
$umur ['mei']="97";
$umur ['saida']="0.987";
echo "Umur mereka : <br>";
foreach ($umur as $x=> $x_nilai) {
echo "Nama : ".$x."&nbsp Umur : ".$x_nilai."<br>";
}
?>