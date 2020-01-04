<script>
		function hapus(id){
			tanya = confirm("apakah anda yakin akan menghapus data ini");
			if(tanya == true)
			{
				window.location.href="?method=hapus&id="+id;
			}
		}
</script>
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
			<td><a href="<?php echo $data['direktori']; ?>">DOWNLOAD</a><?php echo "<a href=\"javascript:hapus('".$id."')\">DELETE</a>"; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
	{
		$id = $_GET['id'];
		$delete = "DELETE FROM tb_updown WHERE id ='$id' ";
		$sql = mysql_query($delete);
	}
}
?>