<?php
include 'koneksi.php';

// Retrieve data based on the query parameter
$id_transaksi = $_GET['id'];
$query = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Check if data exists
if (!$data) {
    echo "Data not found!";
    exit();
}

// Retrieve user data
$id_user = $data['id_user'];
$user_query = "SELECT nama, alamat FROM user WHERE id_user = '$id_user'";
$user_result = mysqli_query($koneksi, $user_query);
$user_data = mysqli_fetch_assoc($user_result);

// Retrieve product data
$id_produk = $data['id_produk'];
$produk_query = "SELECT nama, harga FROM produk WHERE id_produk = '$id_produk'";
$produk_result = mysqli_query($koneksi, $produk_query);
$produk_data = mysqli_fetch_assoc($produk_result);

//total harga
$harga_produk = $produk_data['harga'];
$jumlah_barang = $data['jumlah_barang'];
$total_harga = $harga_produk * $jumlah_barang;


// Format date
$tanggal_transaksi = date('Y-m-d / H:i:s',strtotime($data['tanggal_transaksi']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="ml-5">
            <div class="text-center">
                <h2>Toko Apotek</h2>
                <p>invoice: <?php echo $data['id_transaksi']; ?> </p>   
                <p>Jl. mekar sari nomor 1000, depok, jawa tengah</p>
                <hr style="width: 100%; border-top: 2px solid black;">

            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Nama Customer</th>
                    <td><?php echo $user_data['nama']; ?></td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td><?php echo $produk_data['nama']; ?></td>
                </tr>
                <tr>
                    <th>Harga Barang</th>
                    <td><?php echo 'Rp. ' . number_format($harga_produk, 0,',', '.'); ?></td>
                    <!-- $angka_format = number_format($angka, 0, ',', '.') -->
                </tr>
                <tr>
                    <th>Jumlah Barang</th>
                    <td><?php echo $data['jumlah_barang']; ?></td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td><?php echo 'Rp. ' . number_format($total_harga, 0,',', '.'); ?></td>
                </tr>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <td><?php echo $tanggal_transaksi; ?></td>
                </tr>
                <tr>
                    <th>Alamat Penerima</th>
                    <td><?php echo $user_data['alamat']; ?></td>
                </tr>
            </table>
            <script>
                window.print();
            </script>

        </div>
    </div>
</body>

</html>
