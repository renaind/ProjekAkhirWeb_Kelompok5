<?php 
    require 'config.php';

    if(isset($_GET['id_u'])){
        $id_u = $_GET['id_u'];
        $result2 = mysqli_query($db, "SELECT * FROM akun WHERE id_u = '$id_u' ");
        $row2 = mysqli_fetch_array($result2);
    }

    if(isset($_POST['submit'])){
        $nama_user = $_POST['nama_user'];
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $email= $_POST['email'];
        $telepon = $_POST['telepon'];

        $update2 = mysqli_query($db, "UPDATE akun SET nama_user='$nama_user', username='$username', pwd='$pwd', email='$email', telepon='$telepon' WHERE id_u='$id_u'");

        if($update2){
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
        <h3>Edit Data Akun User</h3>
        <form action="" method="post">
            
            <label for="">Nama User</label>
            <input type="text" name="nama_user" class="form-text" value=<?=$row2['nama_user'];?>><br>
            
            <label for="">Username</label>
            <input type="text" name="username" class="form-text" value=<?=$row2['username'];?>><br>
            
            <label for="">Password</label>
            <input type="text" name="pwd" class="form-text" value=<?=$row2['pwd'];?>><br>
            
            <label for="">email</label>
            <input type="text" name="email" class="form-text" value=<?=$row2['email'];?>><br>

            <label for="">telepon</label>
            <input type="text" name="telepon" class="form-text" value=<?=$row2['telepon'];?>><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
        </div>

</body>
</html>