<!doctype html>
<html>
	<head>
		<title> php </title>
	</head>
	<body>
		<table border="1">
			<?php
				$c = 1;
				$b = 1;
				while ($b <= 37*7){
					echo "<tr>";
						$col = 1;
						while ($col <= 42) {
							echo "<td>$c</td>";
							$col++;
							$c++;
						}
					echo "</tr>";
					$b++;
				}
			?>
		</table>
	</body>
</html>