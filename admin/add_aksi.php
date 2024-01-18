<?php
include 'koneksi.php';


$id_produk = $_POST['id_produk'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


mysqli_query($koneksi, "INSERT INTO produk 
    (nama, deskripsi, harga, stok) 
    VALUES 
    ('$nama', '$deskripsi', '$harga', '$stok')");

header("location:data_barang.php");
?>
