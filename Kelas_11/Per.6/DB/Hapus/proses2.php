<?php
error_reporting(0);
include("koneksi.php");
include("delete.php");
$qtampil = "SELECT * FROM tb_user";
$hasil = mysql_query($qtampil);
while ($baris=mysql_fetch_assoc($hasil)){
	$id=$baris['Id_user'];
echo "Username : ".$baris['Username']." Password : ".$baris['Password']. "<a href='?method=hapus&id=$id'>Delete</a><br>";
}
?>