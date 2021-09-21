<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h2>INPUT PRODUK</h2></center>
<form action="tampilproduk.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td>Nama Produk</td><td>:</td><td><input type="text" name="nama" placeholder="Nama Produk" size="50" maxlength="30" autocomplete="off" autofocus/></td>
    </tr>
    <tr><td>Kategori Produk</td><td>:</td><td>
    	<select name="kategori">
    		<option value="">Pilih Kategori</option>
            <option value="Sepatu">Sepatu</option>
            <option value="Pakaian">Pakaian</option>
            <option value="Celana">Celana</option>
            <option value="Jam">Jam</option>
            </select>
        </td>
    </tr>
    <tr><td>Deskripsi Produk</td><td>:</td>
        <td><textarea name="deskripsi" placeholder="Deskrippsi Produk" rows="3" cols="50"/></textarea></td>
    </tr>
    <tr><td>Stok Produk</td><td>:</td>
        <td><input type="text" name="stok" placeholder="Stok Produk" size="20" maxlength="10"/></td>
    </tr>
    <tr><td>Berat Produk</td><td>:</td>
        <td><input type="text" name="berat" placeholder="Berat Produk" size="30" maxlength="30"/></td>
    </tr>
    <tr><td>Harga Produk</td><td>:</td>
        <td><input type="text" name="harga" placeholder="Harga Produk" size="30" maxlength="30"/></td>
    </tr>
    <tr><td>Diskon Produk</td><td>:</td>
        <td><input type="text" name="diskon" placeholder="Diskon Produk" size="30" maxlength="10"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Simpan</button></td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>