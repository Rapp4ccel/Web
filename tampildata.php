<html>
    
    <head>
        <title>Menampilkan Data</title>
        <link rel="stylesheet" href="file1.css">
        <link rel="stylesheet" href="file2.css">
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
    <body class="isidata">
        <h1 class="heading">Data Peralatan Sekolah</h1>
        
        <table class="margin">
            <tr class="tr:hover" > <!--untuk membuat baris-->
                <th class="th">No.</th>
                <th class="th">Kode Barang</th> <!--membuat judul table-->
                <th class="th">Nama Barang</th>
                <th class="th">Harga Barang</th>
                <th class="th">Stok Barang</th>
                <th class="th">Update</th>
            </tr>
            <?php
            include "koneksi.php";
            //$perintah = "SELECT kode_barang, nama_barang FROM tb_barang"; //untuk mengambil beberapa data disebuah database
            $perintah = "SELECT * FROM tbl_barang";//untuk mengambil semua data di tabel barang //jarang digunakan karena terlalu berat //perintah read intinya adalah disini
            $query=mysqli_query($db,$perintah) or die(mysqli_error()); //perintah ambil data
            $nomor = 0;
            while($data=mysqli_fetch_array($query)) //perintah menampilkan data atau read selalu menggunakan baris ini dan 2 baris keatas
            {
            ?> <!--php akan dipotong sampai disini, karena program php tidak mengenali perintah tr/td-->
            <tr class="tr:hover" align="center">
                <td class="td"><?php echo $nomor = $nomor+1 ?>.</td>
                <td class="td"><?php echo $data['Kode'] ?></td>
                <td class="td"><?php echo $data['Nama'] ?></td>
                <td class="td"><?php echo $data['Harga'] ?></td>
                <td class="td"><?php echo $data['Stok'] ?></td>
                <td class="td">
                    <a href="editdata.php">EDIT </a>  |  
                    <a href="hapusdata.php">HAPUS </a>
                </td>
            </tr>
            <?php } ?> <!-- php akan lanjut disini karena perulangan while harus ditutup -->
            <!--untuk tes github-->
            <!--lagi-->
        </table>
    </body>
</html>