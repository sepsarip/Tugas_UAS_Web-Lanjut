<?php
include 'koneksi.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10; 
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT id_transaksi, id_user, id_produk, jumlah_barang, tanggal_transaksi FROM transaksi WHERE id_transaksi = '$search' OR id_transaksi LIKE '%$search%' LIMIT $start, $limit";

$data = mysqli_query($koneksi, $query);

$no = 1;
while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_transaksi']; ?></td>
            <td><?php echo $d['id_user']; ?></td>
            <td><?php echo $d['id_produk']; ?></td>
            <td><?php echo $d['jumlah_barang']; ?></td>
            <td><?php echo date('Y-m-d H:i:s', strtotime($d['tanggal_transaksi'])); ?></td>
        </tr>
    <?php
}
?>