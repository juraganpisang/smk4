<!doctype html>
<html>
	<head>
		<title>Plus</title>
		<style>
			table, tr, td {
				border : solid 1px;
				border-collapse : collapse;
				background-color : lightblue;
			}
		</style>
	</head>
	<body>
		<?php
				$a = 1;
				$b = 1;
				function penjumlahan($n1, $n2){
					$hasil = $n1+$n2;
					return $hasil;
				}
			echo "<table>";
				echo "<tr>";
				echo "<td><b>+</b></td>";
						while ($b <= 100){
							echo "<th>$b</th>";
							$b++;
						}
				echo "</tr>";
				while ($a <= 37)
				{	
					echo "<tr>";
					echo "<th>$a</th>";
					$b = 1;
						while ($b <= 100){
							$hasil = penjumlahan($b,$a);
							echo "<td>";
							echo $hasil;
							echo "</td>";
							$b++;
						}	
					echo "</tr>";
					$a++;
				}
			echo "</table>";
		?>
	</body>
</html>