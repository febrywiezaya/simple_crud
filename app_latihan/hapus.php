<?php
include("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM tbl_data WHERE id=$id");
$cek = mysqli_affected_rows($con);

if ($cek > 0) {
    echo "<script>alert('Data berhasil dihapus!');</script>";
    echo "<script>document.location.href = 'home.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus!');</script>";
}
