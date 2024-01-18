<?php
include '../admin/koneksi.php'; // Pastikan file koneksi.php sudah ada

// Function to fetch all data from a table and convert it to JSON
function backupTableToJSON($connection, $tableName) {
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($connection, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return json_encode($data);
}

// Backup data from each table
$userData = backupTableToJSON($koneksi, "user");
$produkData = backupTableToJSON($koneksi, "produk");
$adminData = backupTableToJSON($koneksi, "admin");
$transaksiData = backupTableToJSON($koneksi, "transaksi");

// Path to the backup folder
$backupFolder = 'backupData/';

if (!is_dir($backupFolder)) {
    mkdir($backupFolder);
}

// Save data to JSON files in the specified folder
file_put_contents($backupFolder . 'backup_user.json', $userData);
file_put_contents($backupFolder . 'backup_produk.json', $produkData);
file_put_contents($backupFolder . 'backup_admin.json', $adminData);
file_put_contents($backupFolder . 'backup_transaksi.json', $transaksiData);

?>

<script>
    alert('Backup selesai. Data telah disimpan dalam folder "backupData" dalam format JSON.');
    // Redirect to another page if needed
    window.location.href = '../admin/index.php';
</script>
