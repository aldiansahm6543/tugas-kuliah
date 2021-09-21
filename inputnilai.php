<!DOCTYPE html>
<html>
<head>
	<title>input nilai</title>
</head>
<body>
<br><br>
<center><b>CEK GRADE NILAI</b></center>
<form action="" method="post">
	<table border="0" cellspacing="10" width="300" align="center">
		<tr>
			<td>Input nilai</td><td><input type="number" name="nilai" placeholder="nilai"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit">Cek</button></td>
		</tr>
	</table>
</form>

<center>
	<?php if (isset($_POST['nilai'])){
		$nilai = $_POST['nilai'];
		if (($nilai >= 0) && ($nilai < 50)) {
			$grade = 'E';
		} elseif (($nilai >= 50) && ($nilai < 60)) {
			$grade = 'D';
		} elseif (($nilai >= 60) && ($nilai < 75)) {
			$grade = 'C';
		} elseif (($nilai >= 75) && ($nilai < 85)) {
			$grade = 'B';
		} elseif (($nilai >= 85) && ($nilai <= 100)) {
			$grade = 'A';
		} else{
			$grade = 'Nilai diluar jangkauan';
		}

		echo 'nilai anda : '.$nilai.', dikonversi menjadi '.$grade;
	}?>

</center>

</body>
</html>