<?php 
    require 'config.php';

    if(isset($_GET['id_m'])){
        $id_m = $_GET['id_m'];
        $result1 = mysqli_query($db, "SELECT * FROM minuman_tradisional WHERE id_m = '$id_m' ");
        $row1 = mysqli_fetch_array($result1);
    }

    if(isset($_POST['submit'])){
        $nama_minum = $_POST['nama_minum'];
        $harga_minum = $_POST['harga_minum'];
        $info_minum = $_POST['info_minum'];
        $foto_minum = $_POST['foto_minum'];

        $update1 = mysqli_query($db, "UPDATE minuman_tradisional SET nama_minum='$nama_minum', harga_minum='$harga_minum', info_minum='$info_minum', foto_minum='$foto_minum' WHERE id_m='$id_m'");

        if($update1){
            header("Location:index.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMARINDA DESSERT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Kue dan Minuman Tradisional Samarinda</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data Minuman</h3>
        <form action="" method="post">
            
            <label for="">Nama Minuman</label>
            <input type="text" name="nama_minum" class="form-text" value=<?=$row1['nama_minum'];?>><br>
            
            <label for="">Harga Minuman</label>
            <input type="text" name="harga_minum" class="form-text" value=<?=$row1['harga_minum'];?>><br>
            
            <label for="">Informasi Minuman</label>
            <input type="text" name="info_minum" class="form-text" value=<?=$row1['info_minum'];?>><br>
            
            <label for="">Foto Minuman</label>
            <input type="text" name="foto_minum" class="form-text" value=<?=$row1['foto_minum'];?>><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
        </div>

</body>
</html>