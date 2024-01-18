<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWL</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            padding: 20px; 
        }
        .form-container {max-width: 600px;}
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="Center">
        <h3 class="text-center">TAMBAH DATA PRODUK BARU</h3>
        <form method="post" action="add_aksi.php">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Isi Nama Produk">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"  rows="3" placeholder="Isi Deskripsi Tentang Produk"></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga"  placeholder="Isi Harga Produk">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" name="stok" id="stok"    placeholder="Jumlah Stok Produk">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="SIMPAN">
                <a href="data_barang.php" class="btn btn-secondary">CANCEL</a>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
