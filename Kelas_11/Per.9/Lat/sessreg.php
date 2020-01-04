<?php
session_start();

$_SESSION['pelajaran'] = "Matematika";

echo "Pelajaran telah dimulai ";
echo "<a href=\"index.php\">Kembali</a>";
?>