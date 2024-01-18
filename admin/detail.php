<?php
include 'koneksi.php';

$id_produk = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            padding: 20px; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Data Transaksi</h2>
        <br />
        <br />
        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?php echo $d['nama']; ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?php echo $d['deskripsi']; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp.<?php echo $d['harga']; ?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?php echo $d['stok']; ?></td>
            </tr>
        </table>
        <a href="data_barang.php" class="btn btn-primary float-right">KEMBALI</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
