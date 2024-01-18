<?php
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];


mysqli_query($koneksi, "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', harga='$harga', stok='$stok' WHERE id_produk='$id_produk'");

header("location:data_barang.php");
?>
