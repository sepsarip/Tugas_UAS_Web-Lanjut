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

$query = "SELECT id_produk, nama, harga, stok FROM produk WHERE id_produk = '$search' OR nama LIKE 
'%$search%' OR deskripsi LIKE '%$search%' LIMIT $start, $limit";
$data = mysqli_query($koneksi, $query);

$result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM produk WHERE id_produk LIKE '%$search%' OR nama LIKE 
'%$search%' OR deskripsi LIKE '%$search%'");
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
                    var searchValue = $('#searchProduk').val();

                    $.ajax({
                        type: 'GET',
                        url: 'search_produk.php', 
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

                $('#searchProduk').on('input', function () {
                    searchAndUpdateTable();
                });
            });
        </script>

        <style>
            /* Menambahkan gaya khusus */
            .add-style {
            background-color: blue; /* Warna latar belakang biru */
            padding: 10px 20px; /* Padding */
            color: white; /* Warna teks putih */
            border-radius: 5px; /* Border radius untuk sudut yang lebih lembut */
            text-decoration: none; /* Menghilangkan dekorasi default */
            }
            .add-style:hover {
                background-color: darkblue; /* Warna latar belakang saat dihover */
                color: white;
            }
    </style>
    </head>

    <body>
        <div class="container container-fluid mt-4 pt-5 mb-5">
            <div class="ml-5">
                <h2><a href="data_barang.php">Data Produk Apotek</a></h2>
                <br/>
                <a href="add.php" class="btn add-style">Tambah Data Produk</a>
                <!-- <a href="logout.php">Logout</a> -->
                <br/>
                <br/>
    
                <form action="data_barang.php" method="GET" class="mb-3">
                    <input type="text" id="searchProduk" name="search" class="col-md-4" placeholder="Cari Produk by id produk, nama, deskripsi...">
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID PRODUK</th>
                                <th>NAMA</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <?php
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
                        </tbody>
                    </table>

                </div>
    
                <div class="pagination justify-content-center" >
                    <ul class="pagination justify-content-center">
                        <?php
                        $previous = $page - 1;
                        $next = $page + 1;
                        // Tombol Previous
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="data_barang.php?page=' . $previous . '&search=' . $search . '">Previous</a></li>';
                        }
                        // Loop untuk menampilkan nomor halaman
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<li class="page-item';
                            if ($page == $i) {
                                echo ' active';
                            }
                            echo '"><a class="page-link" href="data_barang.php?page=' . $i . '&search=' . $search . '">' . $i . '</a></li>';
                        }
                        // Tombol Next
                        if ($page < $total_pages) {
                            echo '<li class="page-item"><a class="page-link" href="data_barang.php?page=' . $next . '&search=' . $search . '">Next</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </body>
</html>
