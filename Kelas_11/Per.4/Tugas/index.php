<html>
<style>
	body {
		background: #272822;
	}
	.wrap .head{
		width:330px;
		height: auto;
		padding: 10px;
		font-size: 19px;
		color:#333;
		float: left;
		font-weight: bold;
		text-align: center;
		border-bottom: 1px solid #DBDCD6;
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
</style>

<body>
	<div class="wrap">
	<div class="head">
		Login
	</div>
	<div class="form">
		<form name="input" action="proses.php" method="post">
			Username : <br/>
			<input type="text" name="user"/>
				<br/>
					Password : <br/>
			<input type="password" name="pass"/>
				<br/>
			<input type="submit" value="kirim" name="KIRIM"/>
		</form>
	</div>
	<div class="footer">
AMAZING SLIDE
	</div>
	</div>
</body>
</html>