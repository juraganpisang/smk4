<html>
<head>
	<title>Penilaian</title>
<head>
	<style>
	body {
		 background-color : lightblue;
	}
	</style>
<body>
	<?php
		if (isset ($_POST['user']) && isset ($_POST['kelas'])) {
			{
			$user = $_POST['user'];
			$kelas = $_POST['kelas'];
			}
		if (($user=="user")&&($pass=="kelas"))
		{
			echo "<p align=\"center\">Selamat $user $kelas, Anda Berhasil Menyelesaikannya :D</p>";
		}
		$skor = 0;
			if (isset ($_POST['jaw1']))
			{
				if ($_POST['jaw1'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw2']))
			{
				if ($_POST['jaw2'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw3']))
			{
				if ($_POST['jaw3'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw4']))
			{
				if ($_POST['jaw4'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw5']))
			{
				if ($_POST['jaw5'] == "D")
					$skor++;
			}
			if (isset ($_POST['jaw6']))
			{
				if ($_POST['jaw6'] == "B")
					$skor++;
			}
			if (isset ($_POST['jaw7']))
			{
				if ($_POST['jaw7'] == "D")
					$skor++;
			}
			if (isset ($_POST['jaw8']))
			{
				if ($_POST['jaw8'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw9']))
			{
				if ($_POST['jaw9'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw10']))
			{
				if ($_POST['jaw10'] == "B")
					$skor++;
			}
			if (isset ($_POST['jaw11']))
			{
				if ($_POST['jaw11'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw12']))
			{
				if ($_POST['jaw12'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw13']))
			{
				if ($_POST['jaw13'] == "D")
					$skor++;
			}
			if (isset ($_POST['jaw14']))
			{	
				if ($_POST['jaw14'] == "B")
					$skor++;
			}
			if (isset ($_POST['jaw15']))
			{	
				if ($_POST['jaw15'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw16']))
			{
				if ($_POST['jaw16'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw17']))
			{
				if ($_POST['jaw17'] == "D")
					$skor++;
			}
			if (isset ($_POST['jaw18']))
			{
				if ($_POST['jaw18'] == "C")
					$skor++;
			}
			if (isset ($_POST['jaw19']))
			{
				if ($_POST['jaw19'] == "A")
					$skor++;
			}
			if (isset ($_POST['jaw20']))
			{
				if ($_POST['jaw20'] == "D")
					$skor++;
			}
			
				$hasil = $skor * 5;
				$salah = 20 - $skor;
					echo "<h1><p align=\"center\">SELAMAT ANDA TELAH MENYELESAIKANNYA</p>";
					echo "<h1><p align=\"center\">$user / $kelas </p><br>";
					echo "<h1><p align=\"center\">BENAR = $skor </p><br>";
					echo "<h1><p align=\"center\">SALAH = $salah </p><br>";
					echo "<h1><p align=\"center\">NILAI = $hasil </p>";
		}
	?>
</body>	
</html>