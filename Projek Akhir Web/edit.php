<?php 
    require 'config.php';

    if(isset($_GET['id_k'])){
        $id_k = $_GET['id_k'];
        $result = mysqli_query($db, "SELECT * FROM kue_tradisional WHERE id_k = '$id_k' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_kue = $_POST['nama_kue'];
        $harga_kue = $_POST['harga_kue'];
        $info_kue = $_POST['info_kue'];
        $foto_kue = $_POST['foto_kue'];

        $update = mysqli_query($db, "UPDATE kue_tradisional SET nama_kue='$nama_kue', harga_kue='$harga_kue', info_kue='$info_kue', foto_kue='$foto_kue' WHERE id_k='$id_k'");

        if($update){
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
        <h3>Edit Data Kue</h3>
        <form action="" method="post">
            
            <label for="">Nama Kue</label>
            <input type="text" name="nama_kue" class="form-text" value=<?=$row['nama_kue'];?>><br>
            
            <label for="">Harga Kue</label>
            <input type="text" name="harga_kue" class="form-text" value=<?=$row['harga_kue'];?>><br>
            
            <label for="">Informasi Kue</label>
            <input type="text" name="info_kue" class="form-text" value=<?=$row['info_kue'];?>><br>
            
            <label for="">Foto Kue</label>
            <input type="text" name="foto_kue" class="form-text" value=<?=$row['foto_kue'];?>><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>    
    </div>

</body>
</html>