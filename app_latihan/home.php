<?php
session_start();
include('koneksi.php');

if ($_SESSION['login'] == false) {
    header('location: index.php');
}

$query = mysqli_query($con, "SELECT * FROM tbl_data");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="padding: 10px;">
    <div style="display: flex; margin-bottom: 5px;">
        <a href="logout.php"><button>Logout</button></a>
        <span style="padding-left: 10px;">Selamat datang <?php echo $_SESSION['login']; ?></span>
    </div>

    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5px">
        <tr>
            <td>No</td>
            <td>Id</td>
            <td>Nama</td>
            <td>Kasus</td>
            <td>Aksi</td>
        </tr>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['kasus']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>">Edit</a>
                    |
                    <a onclick="return confirm('Yakin hapus data ini?')" href="hapus.php?id=<?= $data['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>