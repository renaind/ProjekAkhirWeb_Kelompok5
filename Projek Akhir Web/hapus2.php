<?php 

require 'config.php';

if(isset($_GET['id_u'])){
    $id_u = $_GET['id_u'];
    $hapus2 = mysqli_query($db, "DELETE FROM akun WHERE id_u='$id_u'");

    if($hapus2){
        header("Location:index.php");
    }
}

?>