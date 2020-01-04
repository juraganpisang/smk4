<?php
$username="aku";
$password="rahasia";
$acak="acakadul1123";
$password2=md5 (($password).$acak);

if (isset ($_POST [ 'kirim'])) {
$user=$_POST ['user'];
$pass=$_POST ['pass'];
$pass2=md5 (($pass).$acak);
$input="INSERT INTO tb_user ()"

if (($user==$username)&& ($pass2==$password2)){
echo "login sukses";
}
else
echo "Login GAGAL";

}
?>