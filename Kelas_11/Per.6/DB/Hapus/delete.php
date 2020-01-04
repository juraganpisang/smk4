<?php
if(isset($_GET['method']))
{
	if($_GET['method'] == 'hapus')
		$id = $_GET['id'];
		$qdelete = "DELETE FROM tb_user WHERE Id_user ='$id'";
		$sql = mysql_query($qdelete);
		echo "<br>Data Berhasil Dihapus";
}
?>