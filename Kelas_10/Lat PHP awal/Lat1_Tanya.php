<!Doctype HTML>
<html>
	<head>
		<title>Sapaan</title>
		<style>
			body {
				border :solid 1px;
				padding: 20px;
				width: 150px;
			}
		</style>
	</head>
	<body>
		<form action="Lat1.php" method="GET"> 
				Nama  
			<input type="text" name="inisial" />
				Pukul
			<select name="pukul">
				<option value="#">-</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select> 
			<input type="submit" value="OK" name="input" /> 
		</form>
			<?php 
				if (isset($_GET['input']))
				{
					$inisial = $_GET['inisial'];
					$pukul = $_GET['pukul'];

					if  ($pukul >=1 && $pukul<=12)
					{
						echo "Selamat pagi ".$inisial;
						}
						elseif ($pukul >=12 && $pukul <=15)
					{
						echo "Selamat siang ".$inisial;
						}
						elseif ($pukul >=16 && $pukul <=18)
					{
						echo "Selamat sore ".$inisial;
						}
						elseif($pukul >=19 && $pukul <=24)
					{
						echo "Selamat malam ".$inisial;
							}
				}
					else
					{
						echo 'Isikan nama terlebih dahulu';
					}
			?>	
	</body>
</html>