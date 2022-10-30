<?php
    require_once('koneksi.php');
    $data = json_decode(file_get_contents("php://input"));

    if($data->id!=null){
        $id = $data->id;
        $nama = $data->nama;
        $no_wa = $data->no_wa;
        $alamat = $data->alamat;

        $sql = $conn -> prepare("UPDATE customer SET nama=?, no_wa=?, alamat=? WHERE id=?");
        $sql -> bind_param('sssd', $nama, $no_wa, $alamat, $id);
        $sql -> execute();
        if($sql){
            echo json_encode(array("RESPONSE" => "SUCCESS"), JSON_PRETTY_PRINT);
        }
        else{
            echo json_encode(array("RESPONSE" => "FAILED"), JSON_PRETTY_PRINT);
        }
    }
    else{
        echo "GAGAL";
    }
?>