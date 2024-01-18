<?php
include 'koneksi.php';
include '../dashboard/navbar.php';

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login_admin.php');
}

// fungsi search dan pagination
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10; 
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT id_transaksi, id_user, id_produk, jumlah_barang, tanggal_transaksi FROM transaksi WHERE id_transaksi LIKE '%$search%' LIMIT $start, $limit";


$data = mysqli_query($koneksi, $query);

$result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM transaksi WHERE id_transaksi LIKE '%$search%'");
$row = mysqli_fetch_assoc($result);
$total_pages = ceil($row['total'] / $limit);

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                
                function searchAndUpdateTable() {
                    var searchValue = $('#searchTransaksi').val();

                    $.ajax({
                        type: 'GET',
                        url: 'search_transaksi.php', 
                        data: { search: searchValue },
                        success: function (data) {
                            
                            $('#tableBody').html(data);
                        }
                    });
                }

                $('form').submit(function (e) {
                    e.preventDefault();
                    searchAndUpdateTable();
                });

                $('#searchTransaksi').on('input', function () {
                    searchAndUpdateTable();
                });
            });
        </script>
    </head>

    <body>
        <div class="container mt-4 pt-5 mb-5">
            <div class="ml-5">
                <h2><a href="transaksi.php">Data Transaksi</a></h2>
                <!-- <a href="add.php" class="btn add-style">Tambah Data Produk</a> -->
                <!-- <a href="logout.php">Logout</a> -->
    
                <form action="transaksi.php" method="GET" class="mb-3 mt-5">
                    <input type="text" id="searchTransaksi" name="search" class="col-md-4" placeholder="Cari Transaksi by id transaksi...">
                    <!-- <input type="submit" value="Cari">
                    <a href="transaksi.php" class="btn btn-danger">Reset</a> -->
                </form>
    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID TRANSAKSI</th>
                            <th>ID USER</th>
                            <th>ID PRODUK</th>
                            <th>JUMLAH BARANG</th>
                            <th>TANGGAL TRANSAKSI</th>
                            <th>AKSI</th>
                            <!-- <th>OPSI</th> -->
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php
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
                                <td><a href="cetak_transaksi.php?id=<?php echo $d['id_transaksi']; ?>" class="btn btn-info">Cetak</a></td>
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pagination justify-content-center" >
                    <ul class="pagination justify-content-center">
                        <?php
                        $previous = $page - 1;
                        $next = $page + 1;
                        // Tombol Previous
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="transaksi.php?page=' . $previous . '&search=' . $search . '">Previous</a></li>';
                        }
                        // Loop untuk menampilkan nomor halaman
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<li class="page-item';
                            if ($page == $i) {
                                echo ' active';
                            }
                            echo '"><a class="page-link" href="transaksi.php?page=' . $i . '&search=' . $search . '">' . $i . '</a></li>';
                        }
                        // Tombol Next
                        if ($page < $total_pages) {
                            echo '<li class="page-item"><a class="page-link" href="transaksi.php?page=' . $next . '&search=' . $search . '">Next</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
