<?php

// konfigurasi nilai untuk menyambungkannya ke database 
$databaseHost = 'localhost';
$databaseName = 'crudkaryawan';
$databaseUsername = 'root';
$databasePassword = '';

// membuka koneksi ke database berdasarkan namanya
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// mengembalikan error ketika database tidak tersambung ke program
if($mysqli === true){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>