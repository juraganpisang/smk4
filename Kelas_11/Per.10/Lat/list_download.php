<html>
	<title>
	LIST DOWNLOAD
	</title>
<body>
	<table>
		<?php
		require_once("koneksi.php");
		$query = mysql_query("SELECT * FROM tb_updown");
		
		while ($data = mysql_fetch_assoc($query)) {
		?>
		<tr>
			<td><?php echo $data['nama_file']; ?></td>
			<td><a href="<?php echo $data['direktori']; ?>">DOWNLOAD</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>