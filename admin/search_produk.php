<?php
include 'koneksi.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10; 
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT id_produk, nama, harga, stok FROM produk WHERE id_produk = '$search' OR nama LIKE '%$search%' OR deskripsi LIKE '%$search%' LIMIT $start, $limit";
$data = mysqli_query($koneksi, $query);

$no = 1;
while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_produk']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td>Rp. <?php echo number_format($d['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $d['stok']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-warning">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-danger">HAPUS</a>
                <a href="detail.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-info">DETAIL</a>
            </td>
        </tr>
    <?php
}
?>