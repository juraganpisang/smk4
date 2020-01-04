<html>
	<head>
		<title>MVC</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
      		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body><br><br><br><br>
		<div class="container">
			<div class="addd">
				<form action="" method="POST">
						<div class="form-group">
				
						<h4><center>Edit Data Mahasiswa </center> </h4><br>

							<h5>NIM :</h5>
							<input type="text" name="nim" value="<?=$row[0]?>" class="form-control" readonly />
			
							<h5>Nama :</h5>
							<input type="text" name="nama" value="<?=$row[1]?>" class="form-control" />
						
							<h5>Angkatan :</h5>
							<input type="text" name="angkatan" value="<?=$row[2]?>" class="form-control" />
						
							<h5>Fakultas :</h5>
							<input type="text" name="fakultas" value="<?=$row[3]?>" class="form-control" />
							
							<h5>Alamat :</h5>
							<input type="text" name="prodi" value="<?=$row[4]?>" class="form-control" />
						</div>		
					<input type="submit" name="submit" class="btn btn-primary">
					<input type="button" name="cancel" value="Cancel" href="index.php" class="btn btn-danger">
				</form>
			</div>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ 
		$main = new controller();
		$main->update();
	}
?>