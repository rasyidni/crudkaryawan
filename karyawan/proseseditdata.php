<?php 
    include '../config.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $notelpon = $_POST['notelpon'];

    $getId_jabatan = mysqli_query($mysqli, "SELECT id_jabatan_karyawan from jabatan_karyawan WHERE nama_jabatan_karyawan = '$jabatan'");
    $id_jabatan_row = mysqli_fetch_assoc($getId_jabatan);
    $id_jabatan = $id_jabatan_row['id_jabatan_karyawan'];

    $foto1 = $_POST['foto1'];

    $rand = rand();
    $filename = $_FILES['foto']['name'];

    $x = $rand.'_'.$filename;

    $ekstensi =  array('png','jpg','jpeg', 'JPG', 'JPEG', 'PNG');

    $extg1 = pathinfo($filename, PATHINFO_EXTENSION);

    if (empty($filename)){
        mysqli_query($mysqli, "UPDATE karyawan SET nama_karyawan='$nama', no_telp = '$notelpon', id_jabatan_karyawan=$id_jabatan WHERE id_karyawan='$id'");
        header("location: ../index.php?hasil=berhasil");
    } else if(!in_array($extg1,$ekstensi)){
        header("location: editdata.php?id=$id&alert=Format gambar yang diterima hanya png, jpg dan jpeg!");
    } else {
        unlink('../foto/'.$foto1);

        move_uploaded_file($_FILES['foto']['tmp_name'], '../foto/'.$rand.'_'.$filename);

        mysqli_query($mysqli, "UPDATE karyawan SET nama_karyawan='$nama', no_telp = '$notelpon', id_jabatan_karyawan='$id_jabatan', foto='$x' WHERE id_karyawan='$id'");
        header("location: ../index.php?hasil=berhasil");
    }

?>