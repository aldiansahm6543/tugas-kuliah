<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h2>DATA KOMENTAR ANDA</h2></center>
<form action="tampilkomentar.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td>Nama </td><td>:</td><td><?= $_POST['nama']; ?></td>
    </tr>
    <tr><td>Email </td><td>:</td><td><?= $_POST['email']; ?></td>
    </tr>
    <tr><td>Komentar</td><td>:</td>
        <td><textarea name="komentar" placeholder="Deskrippsi Produk" rows="3" cols="50"/><?= $_POST['komentar']; ?></textarea></td>
    </tr>
    <tr>
        <td colspan="3"><a href="inputkomentar.php" title="">Input kembali</a></td>

    </tr>
</tbody>

</table>
</form>
</body>
</html>