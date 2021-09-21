<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center><h2>DATA REGISTRASI</h2></center>
    <table border="1" style="border-collapse: collapse;" cellspacing="10" width="500" align="center">
    <tbody>
    <tr><td>Nama</td><td>:</td><td><?= $_POST['nama'] ?></td>
    </tr>
    <tr><td>Alamat</td><td>:</td>
        <td><?= $_POST['alamat'] ?></td>
    </tr>
    <tr><td>Tempat lahir</td><td>:</td>
        <td><?= $_POST['tempatlahir'] ?></td>
    </tr>
    <tr><td>Tanggal Lahir</td><td>:</td>
        <td><?= $_POST['tgllahir'] ?></td>
    </tr>
    <tr><td>Jenis Kelamin</td><td>:</td>
        <td><?= $_POST['jenkel'] ?></td>
    </tr>
    <tr><td>Pendidikan</td><td>:</td>
        <td><?= $_POST['pendidikan'] ?></td>
    </tr>
    <tr border="0">
    </tr>
</tbody>

</table>
        <br><center><a href="formregistrasi.php">Kembali</a></center>

</body>
</html>