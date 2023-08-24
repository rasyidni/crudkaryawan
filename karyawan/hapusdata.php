<?php 

include_once("../config.php");

$id = $_GET['id'];
$idj = $_GET['idj'];
$foto = "../foto/".$_GET['foto'];

$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id_karyawan=$id");

if(file_exists($foto)){
    unlink($foto);
}

header("Location: ../index.php?hapus=berhasil");

?>