<?php
    require_once('koneksi.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id!=null){
        $id = $data->id;
        $nama = $data->nama;
        $harga = $data->harga;
        $deskripsi = $data->deskripsi;

        $sql = $conn -> prepare("UPDATE barang SET nama=?, harga=?, deskripsi=? WHERE id=?");
        $sql -> bind_param('sssd', $nama, $harga, $deskripsi, $id);
        $sql -> execute();
        if($sql){
            echo json_encode(array("RESPONSE" => "SUCCESS"));
        }
        else{
            echo json_encode(array("RESPONSE" => "FAILED"));
        }
    }
    else{
        echo "GAGAL";
    }
?>