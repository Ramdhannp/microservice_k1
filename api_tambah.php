<?php
require_once('koneksi.php');
if(isset($_POST['nama']) && isset($_POST['no_wa']) && isset($_POST['alamat'])){
    $nama = $_POST['nama'];
    $sql = $conn -> prepare("INSERT INTO customer (nama, no_wa, alamat) values (?, ?, ?)");
    $no_wa = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $sql->bind_param('sss', $nama, $no_wa, $alamat);
    $sql->execute();
    if($sql){
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }
    else{
        echo"GAGAL";
    }
}

?>