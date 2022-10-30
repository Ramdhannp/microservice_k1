<?php
require_once('koneksi.php');
if(isset($_POST['nama']) && isset($_POST['harga']) && isset($_POST['deskripsi'])){
    $nama = $_POST['nama'];
    $sql = $conn -> prepare("INSERT INTO barang (nama, harga, deskripsi) values (?, ?, ?)");
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $sql->bind_param('sss', $nama, $harga, $deskripsi);
    $sql->execute();
    if($sql){
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }
    else{
        echo"GAGAL";
    }
}

?>