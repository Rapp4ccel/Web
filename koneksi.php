<?php
    $server = "localhost"; //nama server yang digunakan
    $user = "Bung"; //nama user
    $password = ""; //masukkan password jika diperlukan
    $nama_database = "Lancar_Jaya"; //masukkan nama database yang sudah dibuat tadi

    $db = mysqli_connect($server, $user, $password, $nama_database); //perintah koneksi

    if(!$db)
    {
        die("Gagal terhubung dengan database: " . mysqli_connect_error()); //pesan kalau koneksi gagal
    }
?>