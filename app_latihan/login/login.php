<?php
session_start();
include('../koneksi.php');

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['login'] = $username;
        echo "<script>document.location.href = '../home.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah!')</script>";
        echo "<script>document.location.href = '../index.php';</script>";
    }
}
