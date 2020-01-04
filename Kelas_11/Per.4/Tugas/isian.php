<html>
	<style>
	table {
		width : 600px;
		padding : 10px;
	}
	.wrap .form{
		margin:0;
		color:#555;
		font-weight: bold;
		margin: auto;
		width:330px;
		height: auto;
		padding:20px 10px;
		float: left;
		text-align: center;
	}
	body {
	background: #272822;
	}
	body{
		width: 350px;
		height: auto;
		margin:auto;
	}
	.wrap .form input[type="text"],.wrap .form input[type="password"]{
		width: 300px;
		height: auto;
		padding:10px;
		border:1px solid #ccc;
		text-align: center;
		background: #fff;
		box-shadow:inset 0px 3px 5px #CBCCC4;
		border-radius:5px;
	}
	.wrap .form input[type="text"]:focus,.wrap .form input[type="password"]:focus{
		width: 300px;
		height: auto;
		padding:10px;
		border:1px solid #BCBCBC;
		text-align: center;
		outline: none;
		box-shadow:inset 0px 3px 5px #999C8B;
		background: #fff;
	}
	.wrap .form input[type="submit"]{
		background: -webkit-linear-gradient(top ,#EAEBE7 0%,#D5D6CF 100%);
		background: -moz-linear-gradient(center top ,#EAEBE7 0%,#D5D6CF 100%);
		border:1px solid #BFC1B7;
		padding:5px 10px;
		border-radius: 3px;
		color:#5B5E51;
		font-weight: bold;
		margin-top: 5px;
	}
	.wrap .form input[type="submit"]:hover{
		color:#333;
		cursor: pointer;
		box-shadow: 0px 0px 7px #AAE8F4;
	}
	.wrap{
		width:350px;
		height: auto;
		float:left;
		background: #F9F9F9;
		margin-top:150px;
		border-radius:5px;
		box-shadow: 0px 0px 5px #000;
		border:1px solid #DBDCD6;
	}
	.footer{
		width:330px;
		height: auto;
		padding:8px 10px;
		font-size: 11px;
		color:#333;
		float: left;
		background: #EFF0EC;
		text-align: center;
		border-top: 1px solid #fff;
	}	
	fieldset {
		border : 4px solid white;
		border-radius : 5px;
		background : grey;
		color : black;
		width : 600px;
		padding : 10px;
		margin-left : -120px;
	}
	.yol {
		width: 380px;
	}
	.yul {
		width: 140px;
	}
	.tyu {
			margin-left: 78px;
	}
	.tya {
		margin-left: 10px;
	}
	</style>
<body>
	<fieldset>
	<H2><center><u>PENGISIAN BIODATA</u></center></H2>
	<br>
	<div class="form">
	<form action= "hasil.php" method= "post" name= "input" ENCTYPE="Multipart/form-data">
	<table>
	<tr>
	<td><label>N I S :</label></td> 
		<td><input type="number" class="yol" required ></input></td>
	</tr>
	<tr>
	<td><label>Nama :</label></td>
		<td><textarea name="nama" class="yol" required></textarea></td>
	</tr>
	<tr>
	<td><label>Alamat :</label></td> 
		<td><textarea name="ala"  class="yol" required></textarea></td>
	</tr>
	<tr>
	<td><label>TTL : </label></td>
		<td><input type="text" name="ttl1" placeholder="Tempat Lahir" required>
		<select name="ttl2" required>
		<option value="" required>tanggal</option>
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
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option></select>
		<select name="ttl3"> <option value="" required>bulan</option>
			<option value="Januari">Januari</option>
			<option value="Februari">Februari</option>
			<option value="Maret">Maret</option>
			<option value="April">April</option>
			<option value="Mei">Mei</option>
			<option value="Juni">Juni</option>
			<option value="Juli">Juli</option>
			<option value="Agustus">Agustus</option>
			<option value="September">September</option>
			<option value="Oktober">Oktober</option>
			<option value="November">November</option>
			<option value="Desember">Desember</option></select>
		<select name="ttl4"> <option value="" required>tahun</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option></select></td>
	</tr>
	<tr>
	<td><label>Jenis Kelamin : </label></td>
		<td><input type="radio" name="jen" value="Laki Laki" required>Laki Laki<br>
		<input type="radio" name="jen" value="Perempuan">Perempuan<br></td>
	</tr>
	<td><label>Jurusan : </label></td>
	<td><select name="jurusan " class="yul" required><br>
	<option value="">-------</option><br>
	<option value="Multimedia">Multimedia</option><br>
	<option value="Animasi">Animasi</option><br>
	<option value="R P L">R P L</option><br>
	<option value="T K J">T K J</option><br>
	<option value="Produksi">Produksi</option><br>
	<option value="Persiapan">Persiapan</option><br>
	</select></td>
	</tr>
	<tr>
	<td><label>Ingin PSG di Daerah : </label></td>
		<td><input type="checkbox" name="jar1" value="Malang">Malang<br>
		<input type="checkbox" name="jar2" value="Jakarta">Jakarta<br>
		<input type="checkbox" name="jar3" value="Bali">Bali<br>
		<input type="checkbox" name="jar4" value="Bandung">Bandung<br>
		<input type="checkbox" name="jar5" value="Semarang">Semarang<br>
		<input type="checkbox" name="jar6" value="Palembang">Palembang<br></td>
	</tr>
	<tr>
	<td><label>Cita Cita : </label></td>
		<td><textarea name="cita" class="yol" required></textarea></td>
	</tr>
	</table>
	<a class="tya">Upload file :</a><a class="tyu"> <input type="file" name="file"></a>
	<br><center><input type="submit" name="kirim1" value="KIRIM"></center>
	<center><a href="isian.php">Reset</a></center>
	</form>
	</fieldset>
	</div>
</body>
</html>