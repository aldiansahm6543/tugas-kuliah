<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<b>Pengelolaan data siswa</b>
<form action="tampilmahasiswa.php" method="POST">
<pre>
	nama : <input type="text" name="nama" maxlength="50"><br>
	alamat : <input type="text" name="alamat" maxlength="50">
</pre>
Jenis Kelamin :
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
<input type="radio" name="jeniskel" value="Perempuan"> Perempuan
<p>
Pekerjaan :
<select name="pekerjaan">
<option value="-Pilih-">
<option value="Pelajar">Pelajar
<option value="Karyawan">Karyawan
<option value="Wirausaha">Wirausaha
<option value="Lain-lain">Lain-lain
</select>
<p>
Hobi : 
<input type="checkbox" name="hobi1" value="Olahraga">Olahraga
<input type="checkbox" name="hobi2" value="Musik">Musik
<input type="checkbox" name="hobi3" value="Jalan-Jalan">Jalan-Jalan
<p>
<input type="submit" name="" value="simpan">
</form>
</body>
</html>