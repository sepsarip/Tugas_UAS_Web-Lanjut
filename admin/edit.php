
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
                <h3 class="text-center">EDIT DATA PRODUK</h3>
                
                <?php
                include 'koneksi.php';
                $id_produk = $_GET['id'];
                $data = mysqli_query ($koneksi, "select * from produk where id_produk='$id_produk'");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <form method="post" action="update.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"  rows="3"><?php echo $d['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga"  value="<?php echo $d['harga']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" name="stok" id="stok"    value="<?php echo $d['stok']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="submit" value="SIMPAN">
                            <a href="data_barang.php" class="btn btn-secondary">CANCEL</a>
                        </div>
                    </form>
                <?php
                } 
                ?>
            </div>
        </div>
    </body>
</html>
