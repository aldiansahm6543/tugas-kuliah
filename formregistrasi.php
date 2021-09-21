<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center><h2>FORM REGISTRASI</h2></center>
<form action="dataregis.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td>Nama</td><td>:</td><td><input type="text" name="nama" placeholder="nama" size="50" autocomplete="off" autofocus/></td>
    </tr>
    <tr><td>Alamat</td><td>:</td>
        <td><textarea name="alamat" placeholder="alamat" rows="3" cols="50"/></textarea></td>
    </tr>
    <tr><td>Tempat lahir</td><td>:</td>
        <td><input type="text" name="tempatlahir" placeholder="tempat lahir"/></td>
    </tr>
    <tr><td>Tanggal Lahir</td><td>:</td>
        <td><input type="date" name="tgllahir" placeholder="tanggal lahir"/></td>
    </tr>
    <tr><td>Jenis Kelamin</td><td>:</td>
        <td><input type="radio" name="jenkel" value="Laki-Laki"> Laki - Laki
            <input type="radio" name="jenkel" value="Perempuan"> Perempuan</td>
    </tr>
    <tr><td>Pendidikan</td><td>:</td>
        <td><select name="pendidikan">
            <option value="">Pilih pendidikan</option>
            <option value="s1">S1</option>
            <option value="d3">D3</option>
            </select></td>
    </tr>
    <tr>
        <td colspan="4"><button type="submit" name="simpan">Simpan</button> <button type="reset">Batal</button></td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>