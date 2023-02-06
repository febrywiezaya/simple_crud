<?php

include('koneksi.php');

$id = $_GET['id'];
$select = mysqli_query($con, "SELECT * FROM tbl_data WHERE id=$id");
$data = mysqli_fetch_assoc($select);

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kasus = $_POST['kasus'];

    $query = mysqli_query($con, "UPDATE tbl_data SET nama='$nama',kasus='$kasus' WHERE id='$id'");
    $cek = mysqli_affected_rows($con);

    if ($cek > 0) {
        echo "<script>alert('Data berhasil diperbarui!');</script>";
        echo "<script>document.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Data gagal diperbarui!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Data</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>" readonly>
        <table>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Kasus</label></td>
                <td><input type="text" name="kasus" value="<?= $data['kasus'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" style="width: 100%;">Edit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>