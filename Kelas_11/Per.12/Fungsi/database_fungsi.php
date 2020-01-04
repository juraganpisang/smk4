<?php
	function koneksi() {
		mysql_connect("localhost","root","");
		mysql_select_db("pwd");
	}
	
	function selectDatabase() {
		return mysql_query("SELECT * FROM nilai_siswa");
	}
	
	function insertDatabase($nama, $nilai) {
		return mysql_query("INSERT INTO nilai_siswa (nama, nilai) values ('$nama', '$nilai')");
	}
	
	function deleteDatabase($id) {
		return mysql_query("DELETE FROM nilai_siswa WHERE id ");
	}
	
	function tampilData() {
	koneksi();
	
	$query = selectDatabase();
	
	$no = 1;
	
	echo "<table>";
	echo "<tr>";
	echo "<td>No</td>";
	echo "<td>Nama</td>";
	echo "<td>Nilai</td>";
	echo "</tr>";
	
	while ($data = mysql_fetch_assoc( $query ) ) {
	echo "<tr>";
	echo "<td>$no</td>";
	echo "<td>".ucwords($data['nama'])."</td>";
	echo "<td>$data[nilai]</td>";
	echo "</tr>";
	$no++;
	}
	echo "</table>";
	}
tampilData();
insertDatabase('Siti',89);
deleteDatabase(1);
?>