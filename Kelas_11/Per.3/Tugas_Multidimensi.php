<?PHP
//Array Multidimensi
(
$data = @array (
		Array (Hari =>"Senin",
				Pelajaran1 =>"P.Desktop",
				Guru1 => "Bu Dian",
				Pelajaran2 =>"Basis Data",
				Guru2=> "Pak Mahmud",
				),
		Array (Hari =>"Selasa",
				Pelajaran1 =>"PWD",
				Guru1 => "Pak Danang",
				Pelajaran2 =>"PBO",
				Guru2 => "Pak Hilmi",
				),
		Array (Hari =>"Rabu",
				Pelajaran1 =>"B.Inggris",
				Guru1 => "Bu Anis",
				Pelajaran2 => "P.Dasar",
				Guru2 => "Pak Mahmud",
				Pelajaran3 => "PKN",
				Guru3 => "Bu Mulya",
				Pelajaran4 => "KWU",
				Guru4 => "Bu Rindi",
				),
		Array (Hari =>"Kamis",
				Pelajaran1 =>"Agama Islam",
				Guru1 => "Pak Rifa'i",
				Pelajaran2 =>"Olahraga",
				Guru2 => "Pak Andrie",
				Pelajaran3 =>"B.Indonesia",
				Guru3 => "Bu Kun",
				),
		Array (Hari =>"Jumat",
				Pelajaran1 =>"Siskom",
				Guru1 => "Bu Rahma",
				Pelajaran2 =>"Matematika",
				Guru2 => "Bu Dwi",
				Pelajaran3 =>"B.Inggris",
				Guru3 => "Bu Anis",
				Pelajaran4 =>"Seni Budaya",
				Guru4 => "Pak Mawardi",
				Pelajaran5 => "Sejarah",
				Guru5 => "Bu Novi",
				),
		Array (Hari =>"Sabtu",
				Pelajaran1 =>"B.Indonesia",
				Guru1 => "Bu Kun",
				Pelajaran2 =>"PPL",
				Guru2 => "Pak Hilmi",
				Pelajaran3 =>"Matematika",
				Guru3 => "Bu Dwi",
				Pelajaran4 =>"Fisika",
				Guru4 => "Pak Ansor",	
				),
		)
);
	Echo "<b><u><h3>ARRAY MULTIDIMENSI</h3><br><br></b></u>";
	Foreach ($data as $val)
{
	foreach ($val as $key =>$data2)
	{
		echo "<i><b>$key</b> : $data2<br>";
	}
	echo "<hr><br></i>";
}
?>