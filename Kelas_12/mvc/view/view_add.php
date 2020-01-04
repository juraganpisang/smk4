<html>
	<head>
		<title>MVC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
      	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

<body><br><br><br><br>
	<form action="" method="POST">
		<div class="container">
			<div class="addd">
				<div class="form-group">
				
				<h4> <center>Tambah Data Mahasiswa</center> </h4><br>

					<h5>NIM</h5>
					<input class ="form-control" type="text" name="nim"  />
					
					<h5> Nama:</h5>
					<input class ="form-control" type="text" name="nama" />
					
					<h5> Angkatan :</h5>
					<input class ="form-control" type="text" name="angkatan" />
				
					<h5>Fakultas:</h5>
					<input class ="form-control" type="text" name="fakultas" />
			
					<h5>Prodi :</h5>		
					<input class ="form-control" type="text" name="prodi" />
				</div>
					<input type="submit" name="submit" class="btn btn-primary">
			</div>					
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
	}
?>