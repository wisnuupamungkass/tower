<?php
require ('config.php');

// jika ada parameter yang dilempar dari script index.php
// maka lakukan pencarian
if (isset($_GET['kab']))
{
	$id = $_GET['kab'];
	$sql = "SELECT * from `peta` WHERE `kecamatan` LIKE '%".$id."%' or `kelurahan` LIKE '%".$id."%' or `id_site` LIKE '%".$id."%'";
} 
else 
{
	// kalo ga, tampilkan semua lokasi
	$sql= "SELECT * from `peta`";
}

$data = mysql_query($sql);
// tambah ini

// hitung dulu ada datanya apa nggak
$hitung = mysql_num_rows($data);
if($hitung > 0)
{
	// kalo datanya ada maka tampilkan
	$json = '{"warteg": {';
	$json .= '"cabang":[ ';
	while($x = mysql_fetch_array($data))
	{
		$json .= '{';
		$json .= '"idsite":"'.$x['id_site'].'",
			"singkatan":"'.$x['singkatan'].'",
			"kecamatan":"'.$x['kecamatan'].'",
			"kelurahan":"'.$x['kelurahan'].'",
			"pemilik":"'.$x['pemilik'].'",
			"penyewa1":"'.$x['penyewa1'].'",
			"penyewa2":"'.$x['penyewa2'].'",
			"penyewa3":"'.$x['penyewa3'].'",
			"x":"'.$x['latitude'].'",
			"y":"'.$x['longitude'].'",
			"foto":"'.$x['foto'].'"
		},';
	}
	$json = substr($json,0,strlen($json)-1);
	$json .= ']';
	$json .= '}}';
}
else
{
	// kalo ternyata datanya kosong
	$json = '{"status": "kosong"}';
}

//return $json
echo $json;

?>
