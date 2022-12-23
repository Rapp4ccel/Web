<html>
    <head>
        <title>FORM BARANG</title>
        <link rel="stylesheet" href="file2.css">
    </head>
    <body class="badan">
        <div class="isian">
            <div class="judul">Form Isian Barang</div>
            <div class="form">
                <form method="POST" action="simpandata.php">
                    <div class="data">
                        <label>Masukkan Kode Barang</label>
                        <input type="text" name="kodebarang">
                    </div>
                    <br>
                    <div class="data">
                        <label>Masukkan Nama Barang</label>
                        <input type="text" name="namabarang">
                    </div>
                    <br>
                    <div class="data">
                        <label>Masukkan Harga Barang</label>
                        <input type="text" name="hargabarang">
                    </div>
                    <br>
                    <div class="data">
                        <label>Masukkan Stok Barang</label>
                        <input type="text" name="stokbarang">
                    </div>
                    <br>
                    <div class="data">
                        <input class="button" type="submit" value="simpan">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>