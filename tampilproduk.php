<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h2>DATA PRODUK</h2></center>
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td><?= $_POST['nama'] ?>
        </td>
    </tr>
    <tr>
        <td>Kategori Produk</td>
        <td>:</td>
        <td>
            <?= $_POST['kategori'] ?>
        </td>
    </tr>
    <tr>
        <td>Deskripsi Produk</td>
        <td>:</td>
        <td><textarea placeholder="Deskrippsi Produk" rows="3" cols="50"/><?= $_POST['deskripsi'] ?></textarea></td>
    </tr>
    <tr>
        <td>Stok Produk</td>
        <td>:</td>
        <td><?= $_POST['stok'] ?></td>
    </tr>
    <tr>
        <td>Berat Produk</td>
        <td>:</td>
        <td><?= $_POST['berat'] ?></td>
    </tr>
    <tr>
        <td>Harga Produk</td>
        <td>:</td>
        <td><?= $_POST['harga'] ?></td>
    </tr>
    <tr>
        <td>Diskon Produk</td>
        <td>:</td>
        <td><?= $_POST['diskon'] ?></td>
    </tr>
</tbody>
</table>
</body>
</html>