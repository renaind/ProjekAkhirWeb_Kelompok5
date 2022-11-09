<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container regis">

        <div class="judul">
            <h2>Registrasi</h2>
        </div>
        
        <div class="form">
            <form action="" method="post">

                <label for="email">Email</label><br>
                <input type="email" name="email_r" class="input" placeholder="Masukkan email"><br>

                <label for="username">Username</label><br>
                <input type="text" name="username_r" class="input" placeholder="Masukkan username"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password_r" class="input" placeholder="Password"><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi_r" class="input" placeholder="Konfirmasi password"><br>

                <input type="submit" name="regis" class="submit" value="Registrasi"><br><br>
            </form>

            <p>Sudah punya akun?
                <a href="login.php">Login</a>
            </p>
        
        </div>
    </div>
</body>
</html>

<?php 
    require 'config.php';

    if(isset($_POST['regis'])){
        $email_r = $_POST['email_r'];
        $username_r = $_POST['username_r'];
        $password_r = $_POST['password_r'];
        $konfirmasi_r = $_POST['konfirmasi_r'];

        // cek username udah digunakan atau belum
        $sql = "SELECT * FROM regis WHERE username_r='$username_r'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username telah digunakan, silahkan gunakan username lain');
                </script>";
        }else{

            //cek konfirmasi password
            if($password_r == $konfirmasi_r){

                $password_r = password_hash($password, PASSWORD_DEFAULT);
                
                $query = "INSERT INTO regis (email_r,username_r,psw_r)
                            VALUES ('$email_r','$username_r','$password_r')";
                $result3 = $db->query($query);

                if($result3){
                    echo "<script>
                            alert('Registrasi Berhasil');
                        </script>";
                }else{
                    echo "<script>
                            alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo "<script>
                            alert('Konfirmasi Password Salah!');
                        </script>";
            }
        }
    }

?>

