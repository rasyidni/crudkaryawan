<?php 
    include '../config.php';

    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];

    mysqli_query($mysqli, "UPDATE jabatan_karyawan SET nama_jabatan_karyawan='$jabatan' WHERE id_jabatan_karyawan='$id'");
    header("location: jabatan.php?hasil=berhasil");

?>