<?php
session_start();

session_destroy();

echo "Pelajaran telah diakhiri. ";
echo "<a href=\"index.php\">Kembali</a>";
?>