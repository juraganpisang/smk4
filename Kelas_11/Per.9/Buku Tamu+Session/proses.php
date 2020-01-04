<style>
	.re {
		background : grey;
	}
	.we {
		background : white;
		height : 300px;
		width : 300px;
		margin-top : 200px;
		margin-left : 500px;
	}
</style>
<body class="re">
<div class="we">
<?php 
	include "koneksi.php";
	
	if (isset($_POST['submit'])){
		
		$username=htmlentities($_POST['username']);
		$password=htmlentities($_POST['password']);

			
			$hasil = mysql_query("SELECT * FROM login WHERE username ='$username' AND password='$password' ");
			$row =mysql_fetch_assoc($hasil);
			if ($row['username'] ==  $username AND $row['password']== $password){
				session_start();
				$_SESSION['username'] = $username;
				header("location:lanjut.php");
			}else{
				echo "<center><h2><br><br>Tidak bisa masuk<br>
					Silahkan login lagi <a href='index.php'>Disini</a><BR>
					Jika belum daftar<br>
					Silahkan sign up <a href='daf.php'>Disini</a></h2></center>";
			}
		}
 ?>
</div>
</body>