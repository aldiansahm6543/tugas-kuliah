<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h2>BUKU TAMU</h2></center>
<form action="tampilkomentar.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td>Nama </td><td>:</td><td><input type="text" name="nama" placeholder="Nama" size="50" maxlength="30" autocomplete="off" autofocus/></td>
    </tr>
    <tr><td>Email </td><td>:</td><td><input type="text" name="email" placeholder="Email"/></td>
    </tr>
    <tr><td>Komentar</td><td>:</td>
        <td><textarea name="komentar" placeholder="Deskrippsi Produk" rows="3" cols="50"/></textarea></td>
    </tr>
    <tr>
        <td ><button type="submit" name="simpan">Simpan</button></td>
        <td ><button type="reset">Batal</button></td>
    </tr>
</tbody>

</table>
</form>
</body>
</html>