<?php
/*Contoh koneksi dengan database MySQL
if ($sambung){ 
echo "Koneksi Berhasil"; }
else {
echo "Konesksi Gagal"; }
*/

$sambung=mysql_connect("localhost","root","") or die ("KONEKSI GAGAL");
$db = mysql_select_db('latihan_pwd') or die ("SELECT DATABASE GAGAL");
?>