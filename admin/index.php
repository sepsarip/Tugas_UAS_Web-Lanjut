<?php
include '../dashboard/navbar.php';
include 'koneksi.php';

//cek apakah username ada, jika tidak ada artinya belum login dan harus login
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login_admin.php');
}


//fungsi memanggil nama admin yang login pada session
$namaAdmin = "Tidak ada sesi username"; // Default

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query = "SELECT nama FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $namaAdmin = $row['nama'];
    } else {
        $namaAdmin = "Error: " . mysqli_error($koneksi);
    }
}

//fungsi jumlah user 
$query = "SELECT count(*) FROM user";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $jumlahUser = $row['count(*)'];
} else {
    die("Error in query: " . mysqli_error($koneksi));
}

//fungsi jumlah produk
$query = "SELECT count(*) FROM produk";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $jumlahProduk = $row['count(*)'];
} else {
    die("Error in query: " . mysqli_error($koneksi));
}

//fungs jumlah transaksi
$query = "SELECT count(*) FROM transaksi";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $jumlahTransaksi = $row['count(*)'];
} else {
    die("Error in query: " . mysqli_error($koneksi));
}

//fungsi  jumlah admin
$query = "SELECT count(*) FROM admin";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $jumlahAdmin = $row['count(*)'];
} else {
    die("Error in query: " . mysqli_error($koneksi));
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Tautan ke Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
</head>
<body>
    <div class="container container-fluid justify-content-center mt-5 pt-2">
        <h1 class="d-flex text-justify mt-5">Welcome to Admin Dashboard, <?php echo $namaAdmin ?></h1>
        <p class="d-flex text-justify mt-3">Hanya admin yang sudah terdaftar saja yang boleh mengakses dashboard ini.</p>
        
        <div class="container container-fluid mt-4">
            <div class="card-group text-center">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Admin</h5>
                        <p class="card-text"><?php echo $jumlahAdmin ?></p>
                    </div>
                </div>
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah User</h5>
                        <p class="card-text"><?php echo $jumlahUser ?></p>
                    </div>
                </div>
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Produk</h5>
                        <p class="card-text"><?php echo $jumlahProduk ?></p>
                    </div>
                </div>
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Transaksi</h5>
                        <p class="card-text"><?php echo $jumlahTransaksi ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>