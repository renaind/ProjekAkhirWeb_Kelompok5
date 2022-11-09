<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
        exit;
    }

?>

<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kue_tradisional");
?>

<?php 
    require 'config.php';

    $result1 = mysqli_query($db, "SELECT * FROM minuman_tradisional");
?>

<?php 
    require 'config.php';

    $result2 = mysqli_query($db, "SELECT * FROM akun");
?>

<?php 
    require 'config.php';

    $result3 = mysqli_query($db, "SELECT * FROM regis");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SAMARINDA DESSERT</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <h2>Kue dan Minuman Tradisional Samarinda</h2>
        </header>

        <div class="list-table">
            <h3>Daftar Dessert Food</h3>
            <a href="formulir.php" class="tambah">Tambah Kue</a>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th width="300px">Nama Kue</th>
                    <th width="300px">Harga Kue</th>
                    <th width="300px">Informasi Kue</th>
                    <th width="300px">Foto Kue</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama_kue']?></td>
                    <td><?=$row['harga_kue']?></td>
                    <td><?=$row['info_kue']?></td>
                    <td><?=$row['foto_kue']?></td>
                    <td class="edit">
                        <a href="edit.php?id_k=<?=$row['id_k'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                    </a>
                    </td>
                    <td class="hapus">
                        <a href="hapus.php?id_k=<?=$row['id_k'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                    </a>
                    </td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>

        <h3>Daftar Dessert Drink</h3>
            <a href="formulir1.php" class="tambah1">Tambah Minuman</a>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th width="300px">Nama Minuman</th>
                    <th width="300px">Harga Minuman</th>
                    <th width="300px">Informasi Minuman</th>
                    <th width="300px">Foto Minuman</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php 
                    $j = 1;
                    while($row1 = mysqli_fetch_array($result1)){

                ?>

                <tr>
                    <td><?=$j;?></td>
                    <td nowrap><?=$row1['nama_minum']?></td>
                    <td><?=$row1['harga_minum']?></td>
                    <td><?=$row1['info_minum']?></td>
                    <td><?=$row1['foto_minum']?></td>
                    <td class="edit1">
                        <a href="edit1.php?id_m=<?=$row1['id_m'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                    </a>
                    </td>
                    <td class="hapus1">
                        <a href="hapus1.php?id_m=<?=$row1['id_m'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                    </a>
                    </td>
                </tr>
                
                <?php
                    $j++; 
                        }
                ?>

            </table>
        </div>


        <div class="list-table1">
            <h3>Daftar Akun User</h3>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th width="300px">Nama User</th>
                    <th width="300px">Username</th>
                    <th width="300px">Password</th>
                    <th width="300px">Email</th>
                    <th width="300px">Telepon</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php 
                    $u = 1;
                    while($row2 = mysqli_fetch_array($result2)){

                ?>

                <tr>
                    <td><?=$u;?></td>
                    <td nowrap><?=$row2['nama_user']?></td>
                    <td><?=$row2['username']?></td>
                    <td><?=$row2['pwd']?></td>
                    <td><?=$row2['email']?></td>
                    <td><?=$row2['telepon']?></td>
                    <td class="edit2">
                        <a href="edit2.php?id_u=<?=$row2['id_u'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                    </a>
                    </td>
                    <td class="hapus2">
                        <a href="hapus2.php?id_u=<?=$row2['id_u'];?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                    </a>
                    </td>
                </tr>
                
                <?php
                    $u++; 
                        }
                ?>

            </table>
        </div>
    </body>
</html>