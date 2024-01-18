<?php
// //koneksi database
// include 'koneksi.php';

// // menangkap data id yang dikirim dari url
// $id_produk = $_GET['id'];

// // menghapus data dari database
// mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");

// //mengalihkan halaman
// header('Location: data_barang.php');
// // header("location:data_barang.php");

//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id_produk = $_GET['id'];

//query untuk panggil nama barangnya
$result = mysqli_query($koneksi, "SELECT nama FROM produk WHERE id_produk='$id_produk'");
$row = mysqli_fetch_assoc($result);
$nama_produk = $row['nama'];

// check apakah form sudah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // jika user yakin ingin menghapus data
    if (isset($_POST['confirm_delete'])) {
        // menghapus data dari database
        mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");

        //mengalihkan halaman
        header('Location: data_barang.php');
    } else {
        // jika user membatalkan penghapusan, kembali ke halaman data_barang.php
        header('Location: data_barang.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Delete</title>
</head>

<body>
    <script>
        var userConfirmed = confirm("Apakah anda yakin ingin menghapus data produk '<?php echo $nama_produk; ?>'?");

        if (userConfirmed) {
            document.write('<form method="post" action=""><input type="hidden" name="confirm_delete" value="1"></form>');
            document.forms[0].submit();
        } else {
            window.location.href = 'data_barang.php';
        }
    </script>
</body>

</html>