<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_minum = $_POST['nama_minum'];
    $harga_minum = $_POST['harga_minum'];
    $info_minum = $_POST['info_minum'];
    $foto_minum = $_POST['foto_minum'];

    $kirim1 = mysqli_query($db, "INSERT INTO minuman_tradisional (nama_minum,harga_minum,info_minum,foto_minum) VALUES ('$nama_minum','$harga_minum','$info_minum','$foto_minum')");
    if($kirim1){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}

?>