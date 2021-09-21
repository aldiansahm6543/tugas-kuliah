<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$bangunan = $_POST['bangunan'];

$hasil = 'Silakan isi nilai terlebih dahulu';
if ($nilai1 != 0 || $nilai2 != 0) {
	$hasil = $nilai1*$nilai2;
	if ($bangunan == 'Segitiga') {
		$hasil = 1/2*($nilai1*$nilai2);	
	}
}
 ?>

	<h2><b>HASIL HITUNG RUMUS</b></h2>
	<p>
		Nilai a adalah : <?= $nilai1 ?><br>
		Nilai b adalah : <?= $nilai2 ?><br>
		Rumus yang dipilih adalah : <?= $bangunan ?><br>
		Hasil Perhitungan : <?= $hasil ?><br>
	</p>
</body>
</html>