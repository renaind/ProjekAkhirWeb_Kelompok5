<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
        exit;
    }
?>

<?php 
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM kue");

    if(isset($_GET['search'])) {
        $keyword = $_GET['keyword'];
        $result = mysqli_query($db, "SELECT * FROM kue WHERE nama_kue LIKE '%$keyword%'");
    }else{
        $result = mysqli_query($db, "SELECT * FROM kue");
    }
?>

<?php 
    require 'config.php';
    $result1 = mysqli_query($db, "SELECT * FROM minuman");

    if(isset($_GET['search'])) {
        $keyword = $_GET['keyword'];
        $result1 = mysqli_query($db, "SELECT * FROM minuman WHERE nama_minum LIKE '%$keyword%'");
    }else{
        $result1 = mysqli_query($db, "SELECT * FROM minuman");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Katalog</title>
</head>
<body class="body">
    <!-- NAVIGATION BAR -->
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="logoi">Samarinda</div>
                <div class="logod"> Dessert</div>
            </div>
            <div class="searching">
            <form action="" method="GET">
                <input type="text" name="keyword" placeholder="Cari Dessert..." class="resizedTextbox" />
                <input type="submit" name="search" value="search" class="cari">
            </form>
            </div>
            <ul class="navigation">
                <li><a href="tentang.html">Tentang</a></li>
                <li><a href="transaksi.php">Pemesanan</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
    
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="main"> <br>
            
        <div class="section-title"> <p><b>Dessert Food</b></p> </div> <br>
        <table border=1>
            <?php 
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr>
                <td><?=$i;?></td>
                <td nowrap><?=$row['nama_kue']?></td>
                <td><?=$row['harga_kue']?></td>
                <td><?=$row['info_kue']?></td>
                <td><img src="img/<?=$row['foto_kue']?>" alt="" width="100px"></td>
            </tr>
                
            <?php
                $i++; 
                    }
            ?>
            </table>     

            <div class="section-title"> <p><b>Dessert Drink</b></p></div> <br>
            <table border=1>
                <?php 
                    $j = 1;
                    while($row1 = mysqli_fetch_array($result1)){
                ?>

                <tr>
                    <td><?=$j;?></td>
                    <td nowrap><?=$row1['nama_minum']?></td>
                    <td><?=$row1['harga_minum']?></td>
                    <td><?=$row1['info_minum']?></td>
                    <td><img src="img/<?=$row1['foto_minum']?>" alt="" width="100px"></td>
                </tr>
                
                <?php
                    $j++; 
                        }
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="copyright">
            <div> <p><b>Copyright 2022 @Kelompok_5_C2020</b></p></div> <br> 
        </div>
    </div>

    <script>
        function ubahMode(){
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
    </script>
</body>
</html>
