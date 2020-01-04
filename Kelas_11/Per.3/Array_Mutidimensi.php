<?PHP
//Array Multidimensi
(
$data = @array (
		Array (Judul =>"Tutorial Hijab",
				Pengarang =>"Wahyu Mei C",
				Alamat =>"Welirang",
				),
		Array (Judul =>"I Fun The God In You",
				Pengarang =>"Andrew",
				Alamat =>"Kendalsari",
				),
		Array (Judul =>"Ternak Kucing",
				Pengarang =>"Saidatul Mahmuda",
				Alamat =>"Krebet",
				),
		)
);
	Echo "Array Multidimensi<br><br>";
	Foreach ($data as $val)
{
	foreach ($val as $key =>$data2)
	{
		echo "$key : $data2<br>";
	}
	echo "<br>";
}
?>