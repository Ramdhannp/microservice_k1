<?php
    require_once('koneksi.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = $conn -> prepare("DELETE FROM barang WHERE id=$id");
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