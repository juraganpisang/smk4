<?php
echo "<table border=1 cellspacing=0 cellpadding=5>";
$data = @array (
	Array ( Hari =>"<tr><td><b>Senin</td></b>",
		Jam=>"<td>3 - 6 </td>",
		Mapel => "<td>P.Desktop</td>",
		Pengajar => "<td>Bu Dian</td></tr>",
		),
	Array ( 
		Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 10</td>",
		Mapel => "<td>Basis data</td>",
		Pengajar => "<td>Bapak Mahmudi </td></tr>",
		),
	Array ( Hari =>"<tr><td><b>Selasa</td></b>",
		Jam=>"<td>1 - 6 </td>",
		Mapel => "<td>PWD</td>",
		Pengajar => "<td>Bu Dian</td></tr>",
		),
	Array ( 
		Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 10</td>",
		Mapel => "<td>PBO</td>",
		Pengajar => "<td>Bapak Mahmudi </td></tr>",
		),
	Array ( Hari =>"<tr><td><b>Rabu</td></b>",
		Jam=>"<td>1 - 2</td>",
		Mapel => "<td>Bahasa Inggris</td>",
		Pengajar => "<td>Bu Anis</td></tr>",
		),		
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>3 - 4</td>",
		Mapel => "<td>Pemrograman Dasar</td>",
		Pengajar => "<td>Bapak Mahmudi</td></tr>",
		),
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>5 - 6</td>",
		Mapel => "<td>PKN</td>",
		Pengajar => "<td>Bu Mulia</td></tr>",
		),
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 8</td>",
		Mapel => "<td>Kewirausahaan</td>",
		Pengajar => "<td>Bu rindi</td></tr>",
		),	
		
	Array ( Hari =>"<tr><td><b>Kamis</td></b>",
		Jam=>"<td>1 - 3</td>",
		Mapel => "<td>Agama</td>",
		Pengajar => "<td>Pak Rifa'i</td></tr>",
		),	
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>4 - 6</td>",
		Mapel => "<td>Penjasorkes</td>",
		Pengajar => "<td>Bapak Andri setiawan</td></tr> ",
		),
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 8</td>",
		Mapel => "<td>Bahasa Indonesia</td>",
		Pengajar => "<td>Bu Kun </td></tr>",
		),			
	
	Array ( Hari =>"<tr><td><b>Jum'at</td></b>",
		Jam=>"<td>1 - 2</td>",
		Mapel => "<td>Siskom</td>",
		Pengajar => "<td>Bu Rahma</td></tr>",
		),	
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>3 - 4</td>",
		Mapel => "<td>Matematika</td>",
		Pengajar => "<td>Bu Dwi</td></tr>",
		),
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>5 - 6</td>",
		Mapel => "<td>Bahasa inggris</td>",
		Pengajar => "<td>Bu Anis</td>",
		),
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 8</td>",
		Mapel => "<td>Seni Budaya</td>",
		Pengajar => "<td>Pak Mawardi</td>",
		),	
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>9 - 10</td>",
		Mapel => "<td>Sejarah</td>",
		Pengajar => "<td>Bu Novi</td></tr>",
		),		
	
	Array ( Hari =>"<tr><td><b>Sabtu</b></td>",
		Jam=>"<td>1 - 2</td>",
		Mapel => "<td>Bahasa Indonesia</td>",
		Pengajar => "<td>Bu Kun</td></tr>",
		),	
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>3 - 4</td>",
		Mapel => "<td>Matematika</td>",
		Pengajar => "<td>Bu Dwi</td></tr>",
		),		
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>5 - 6</td>",
		Mapel => "<td>Pemodelan Perangkat Lunak</td>",
		Pengajar => "<td>Pak Zaenul </td></tr>",
		),		
	Array ( Hari =>"<tr><td>-</td>",
		Jam =>"<td>7 - 8</td>",
		Mapel => "<td>Fisika</td>",
		Pengajar => "<td>Pak Anshori</td></tr>",
		),	
		
);
Echo "Jadwal Pelajaran XI RPL-B<br><br>";
?>
	<th width=100px>Hari</th>
	<th> Jam </th>
	<th width=250px>Mata Pelajaran</th>
	<th width=200px>Pengajar</th>
<?php
foreach ($data as $val)
{
	Foreach ($val as $key => $data2)
	{
		echo $data2;
	}
	
}	
echo "</table>";
?>