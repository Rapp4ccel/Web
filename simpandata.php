<?php
include "koneksi.php";
if(isset ($_POST['kodebarang']))
    {
        //menampung data kiriman dari form barang saat sedang diakses
        $kodebarang = $_POST['kodebarang'];
        $namabarang = $_POST['namabarang'];
        $hargabarang = $_POST['hargabarang'];
        $stokbarang = $_POST['stokbarang'];
    }
    else
    {
        //kalau form barang tidak diakses, maka akan dikembalikan ke form input
        header("location:formbarang.php");
    }
    //memeriksa apakah data sudah diisi atau belum
    if(empty ($kodebarang))
    {
        die('Silahkan masukkan kode barangnya!!!');
    }
    if(empty ($namabarang))
    {
        die('Silahkan masukkan nama barangnya yaa!!');
    }
    if(empty ($hargabarang))
    {
        die('Silahkan masukkan harga barangnya!!!');
    }
    if (empty($stokbarang)) {
        die('Silahkan masukkan stok barangnya yaa!!!');
    }
    //untuk mengkondisikan bahwa yang harus diisi adalah angka
    if(!is_numeric($hargabarang))
    {
        die('Harga barang harus diisi dengan angka');
    }
    if(!is_numeric($stokbarang))
    {
        die('Stok harus diisi dengan angka yaaa!!!');
    }
    //simpan data ke database
    $perintah = "insert into tbl_barang values ('$kodebarang', '$namabarang', '$stokbarang', '$hargabarang')";
    mysqli_query($db, $perintah);
    die("Data Berhasil Disimpan"); //munculkan pesan berhasil disimpan
    ?>