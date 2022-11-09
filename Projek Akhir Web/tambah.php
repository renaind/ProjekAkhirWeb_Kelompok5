<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_kue = $_POST['nama_kue'];
    $harga_kue = $_POST['harga_kue'];
    $info_kue = $_POST['info_kue'];
    $foto_kue = $_POST['foto_kue'];

    $kirim = mysqli_query($db, "INSERT INTO kue_tradisional (nama_kue,harga_kue,info_kue,foto_kue) VALUES ('$nama_kue','$harga_kue','$info_kue','$foto_kue')");
    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}

?>