<?php
// contoh koneksi dengan database MySQL
// koneksi.php
$sambung= mysql_connect("localhost","root","")or die("GAGAL KONEKSI");
$sql = mysql_select_db("siswa")or die("GAGAL MEMILIH DATABASE");
?>