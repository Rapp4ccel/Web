<html>
    <head>
        <title>FORM BARANG</title>
        <link rel="stylesheet" href="file1.css">
    </head>
    <body class="body">
        <div class="judul">Form Isian Barang</div>
        <form method="POST" action="simpandata.php">
            <div>
                <label>Masukkan Kode Barang</label>
                <input type="text" name="kodebarang">
            </div>
            <br>
            <div>
                <label>Masukkan Nama Barang</label>
                <input type="text" name="namabarang">
            </div>
            <br>
            <div>
                <label>Masukkan Harga Barang</label>
                <input type="text" name="hargabarang">
            </div>
            <br>
            <div>
                <label>Masukkan Stok Barang</label>
                <input type="text" name="stokbarang">
            </div>
            <br>
            <div>
                <input class="button" type="submit" value="simpan">
            </div>
        </form>
    </body>
</html>