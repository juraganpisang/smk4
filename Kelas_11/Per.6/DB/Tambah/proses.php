<?php
include ("koneksi.php");
$acak="acakadul1123";

if (isset ($_POST [ 'kirim'])) {
$user=$_POST ['user'];
$pass=$_POST ['pass'];
$pass2=md5 (($pass).($acak).($acak));
$input="INSERT INTO tb_user (Username, Password) VALUES ('$user', '$pass2')";
$hasil=mysql_query($input);
if($hasil){
echo "Data Berhasil Diinputkan";
}
else {
echo "Data Gagagl Diinputkan";
}
}
?>