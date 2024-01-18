<?php
include '../admin/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <style>
        body {
            height: 100vh;
        }
        /* Atur CSS untuk sidebar dan konten */
        #sidebar {
            display:show;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #333;
            color: #fff;
            padding-top: 50px;
            padding-bottom: 60px;
            margin-top:10px;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            padding: 20px 15px;
            border-bottom: 1px solid #555;
        }

        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        #sidebar ul li.logout {
            position: absolute;
            /* bottom: 0; */
            width: 100%;
        }

        .footer { */
            background-color: #e3f2fd; */
            padding: .5rem 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            margin-top:50px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="container cointainer-fluid">
        <nav class="navbar navbar-expand-lg fixed-top bg-secondary bg-gradient">
            <a class="navbar-brand" href="index.php"style="color: #fff;">Dashboard Admin</a>
        </nav>
    
        <!-- Sidebar -->
        <div id="sidebar">
            <ul>
                <!-- Tambahkan link-menu sidebar sesuai kebutuhan -->
                <li><a href="../admin/index.php">Beranda</a></li>
                <li><a href="../admin/data_barang.php">Produk</a></li>
                <li><a href="../admin/transaksi.php">Transaksi</a></li>
                <li><a href="../backup/backup.php">Backup Data</a></li>
    
                <li class="logout"><a href="../admin/logout.php">Logout</a></li>
            </ul>
        </div>
    
        <!-- Footer -->
        <div class="footer fixed-bottom bg-secondary">
            &copy; 2024 Dashboard Admin - Kelompok 10
        </div>

    </div>


</body>
</html>
