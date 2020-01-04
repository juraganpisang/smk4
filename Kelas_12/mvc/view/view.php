<html>
	<head>
		<title>MVC PHP</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
      		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body><br><br><br><br><br>
		<div class="container">
			<div class="addd">
                    <table class="table table-hovered">
						<tr align="center">
							<td colspan="2">Opsi</td>
							<td>NIM</td>
							<td>Nama</td>
							<td>Angkatan</td>
							<td>Fakultas</td>
							<td>Prodi</td>
						</tr>
					<?php while($row = $this->model->fetch($data)){
						echo "
							<tr align='center'>
								<td><a href='index.php?e=$row[0]'>Edit</a></td>
								<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
								<td>$row[0]</td>
								<td>$row[1]</td>
								<td>$row[2]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
							</tr>
						";
					}?>
					</table>				<center><a href='index.php?i=add'>+Tambah Data</a></center>
		</div>			
	</body>
</html>