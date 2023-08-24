<?php

// import config.php sebagai alat untuk koneksi ke database
include '../config.php';

// value dari POST yg dikirimkan lewat form
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$notelpon = $_POST['notelpon'];

// mendapatkan data id_jabatan_karyawan dari tabel jabatan_karyawan
$getId_jabatan = mysqli_query($mysqli, "SELECT id_jabatan_karyawan from jabatan_karyawan WHERE nama_jabatan_karyawan = '$jabatan'");
$id_jabatan_row = mysqli_fetch_assoc($getId_jabatan);
$id_jabatan = $id_jabatan_row['id_jabatan_karyawan'];
// mendapatkan data id_jabatan_karyawan dari tabel jabatan_karyawan

// generate angka random
$rand = rand();

// mengambil nama dari foto yang diupload dan dikirim melalui post
$filename = $_FILES['foto']['name'];

// variabel untuk menyimpan nama foto ke dalam database, isinya nilai random kemudian tanda _ lalu nama foto yang diupload
$x = $rand.'_'.$filename;

$ekstensi = array('png', 'jpg', 'jpeg');

$extg1 = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($extg1,$ekstensi)) {
	header("location: tambahdata.php?alert=Format gambar yang diterima hanya png, jpg dan jpeg!");
} else {
    move_uploaded_file($_FILES['foto']['tmp_name'], '../foto/'.$rand.'_'.$filename);

    mysqli_query($mysqli, "INSERT INTO karyawan(nama_karyawan, id_jabatan_karyawan, no_telp, foto) VALUES('$nama','$id_jabatan','$notelpon', '$x')");

    header("location: ../index.php?alert=berhasil");
}


?>