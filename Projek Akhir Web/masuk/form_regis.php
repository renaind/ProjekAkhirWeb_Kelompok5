<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Cake</title>
</head>
<body>
    <header>
        <div class="judul">
            <img src="img/logo.png" alt="toko" width="90px">
            <h1></h1>
        </div>
        <div class="akun">
            <p>Akun Orang</p>
            <a href="">Logout</a>
        </div>
    </header>

    <div class="content">
        <h1>Daftar</h1>
        <div class="searching">
            <form action="" method="get">
                <input type="text" name="" placeholder="Searching for.." class="search">
                <input type="submit" name="" value="cari" class="cari">
            </form>
        </div>

        <div class="tabel">
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Nana</td>
                    <td>Sempaja</td>
                    <td>Samarinda</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Nano</td>
                    <td>Pramuka</td>
                    <td>Samarinda</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Cindy</td>
                    <td>Suwandi</td>
                    <td>Samarinda</td>
                </tr>
                
            </table>
        </div>
    </div>

</body>
</html>