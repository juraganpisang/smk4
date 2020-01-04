<?PHP
$sambung= mysql_connect("localhost","root","")or die("GAGAL KONEKSI");
$sql = mysql_select_db("siswa")or die("GAGAL MEMILIH DATABASE");

if ( isset($_GET['page'])){
			$page = $_GET['page'];
		} else {
			$page = 1;
		}

		// set maximum content for each page
		$max = 2;
		//Set offset for each page
		$offset = ($page - 1) * $max;


	require_once("koneksi.php");

	if (isset($_GET['search'])){
		$search = $_GET['search'];

		$query = mysql_query("select * from tb_siswa where NAMA like '%$search%' limit $offset, $max");


	} else {
		$query = mysql_query("select * from tb_siswa where NAMA like '%$search%' limit $offset, $max");
		$search ="";
	}
?>
