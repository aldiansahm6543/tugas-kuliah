<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	
	<form action="hasilrumus.php" method="POST" accept-charset="utf-8">
		<h2><b>Rumus Bangunan</b></h2>
		<table border="0" cellspacing="10" width="300" align="center">
			<tbody>
				<tr>
					<td>Nilai 1</td><td><input type="number" name="nilai1"></td>
				</tr>
				<tr>
					<td>Nilai 2</td><td><input type="number" name="nilai2"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="radio" name="bangunan" value="Segitiga">Segitiga <input type="radio" name="bangunan" value="Persegi Panjang">Persegi panjang</td>
				</tr>
				<tr>
					<td colspan="2">
					<br>	
					<input type="submit" value="Hitung">
					<input type="reset" value="Batal">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</center>
</body>
</html>