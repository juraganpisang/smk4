<?php
session_start();

echo "<a href=\"sessreg.php\">Mulai Pelajaran</a>";
echo " | ";
echo "<a href=\"sessdestroy.php\">Akhiri Pelajaran</a>";
echo "<br><br>";

if (isset($_SESSION['pelajaran'])) {
	echo "Pelajaran saat ini adalah ".$_SESSION['pelajaran'];
}
else {
	echo "Tidak ada pelajaran";
}
?>