<?php
include '../config.php';

$jabatan = $_POST['jabatan'];

mysqli_query($mysqli, "INSERT INTO jabatan_karyawan(nama_jabatan_karyawan) VALUES('$jabatan')");

header("location: jabatan.php?alert=berhasil");
?>