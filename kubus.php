<!DOCTYPE html>
<html>
<head>
	<title>Volume kubus</title>
</head>
<body>
<?php
	$text1 = 'Belajar Menghitung ';
	$text2 = 'Volume Kubus';

	$sisi = 15;
	$volume = $sisi*$sisi*$sisi;
?>

<p>
	<span><?= $text1.$text2 ?></span><br>
	<span>Panjang sisi kubus = <?= $sisi ?></span><br>
	<span>Volume Kubus = <?= $volume. 'cm3' ?></span>
</p>


</body>
</html>