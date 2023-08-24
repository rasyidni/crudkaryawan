<?php 

include_once("../config.php");

$id = $_GET['id'];

mysqli_query($mysqli, "DELETE FROM jabatan_karyawan WHERE id_jabatan_karyawan=$id");

header("Location: jabatan.php?hapus=berhasil");

?>