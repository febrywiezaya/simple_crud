<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="">Kasus</label></td>
                <td><input type="text" name="kasus"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" style="width: 100%;">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

include('koneksi.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kasus = $_POST['kasus'];

    $query = mysqli_query($con, "INSERT INTO tbl_data VALUES('','$nama','$kasus')");
    $cek = mysqli_affected_rows($con);

    if ($cek > 0) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
        echo "<script>document.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan!');</script>";
    }
}

?>