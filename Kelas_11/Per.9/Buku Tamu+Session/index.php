<?php
session_start();
?>
<style>
	body {
		font-family : Arial;
		background-color : grey;
		padding :50px;
	}
	.reff {
		width:200px;
		margin:50px auto;
		padding:50px;
		border-radius:10px;
		background : white;
	}
	.tols {
		width:200px;
		height:30px;
		text-align:center;
		border-radius:5px;
		font-family:segoe ui;
		font-weight:bold;
		color:black;
	}
	#send {
		width:200px;
		height:30px;
		text-align:center;
		border-radius:5px;
		border:solid 1px brown;
		font-family:segoe ui;
		background-color :brown;
		color:white;
		}
	#send:hover{
		background-color: red;
	}
</style>
<CENTER><h1>FORM LOGIN</h1></center>
<div class="reff">
<form action="proses.php" method="POST" name="form">
		<input type="text" name="username" placeholder="Username" class="tols"><br><br>
		<input type="password" name="password" placeholder="Password" class="tols"><br><br>
		<input type="submit" name="submit" value="Login" id="send">
</form>
Tidak punya akun? <a href="daf.php">Sign UP</a>
</div>