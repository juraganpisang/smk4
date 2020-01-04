<?php
include '../koneksi.php';
if(isset($_GET['method'])){
	if($_GET['method'] == 'hapus')
	{
		$id = $_GET['id'];
		$qdelete = "DELETE FROM tb_pemesanan WHERE id ='$id' ";
		$sql = mysql_query($qdelete);
		echo"<meta http-equiv='refresh' content='0; url=pemesan.php'>";
	}
}
?>