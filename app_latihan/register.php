<?php

include('koneksi.php');
if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "INSERT INTO tbl_login VALUES('','$username','$password')");
    $cek = mysqli_affected_rows($con);

    if ($cek > 0) {
        echo "<script>alert('Daftar berhasil dilakukan!')</script>";
        echo "<script>document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Username atau Password salah!')</script>";
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
    <style>
        .parent {
            display: grid;
            place-items: center;
            min-height: 90vh;
        }

        .child {
            border: solid 1px black;
            width: 30%;
            height: 40%;
            text-align: center;
            align-items: center;
            align-content: center;
            justify-content: center;

        }
    </style>
</head>

<body>
    <div class="parent">
        <div class="child">
            <h2>REGISTER</h2>

            <form action="" method="POST">
                <table style="margin: auto;">
                    <tr height="30px">
                        <td>Username</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr height="30px">
                        <td>Password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="daftar" value="Daftar" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-top: 5px;">
                            <a href="index.php">Sign In</a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>