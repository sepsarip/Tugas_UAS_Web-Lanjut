<?php
include ('../admin/koneksi.php');

// Fungsi untuk membersihkan dan melindungi input
function clean_input($data) {
    global $koneksi;
    $data = htmlspecialchars($data);
    $data = $koneksi->real_escape_string($data);
    return $data;
}

// Proses registrasi ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    // Ambil data dari form
    $username = clean_input($_POST["username"]);
    $password = clean_input($_POST["password"]);
    $nama = clean_input($_POST["nama"]);
    $email = clean_input($_POST["email"]);
    $alamat = clean_input($_POST["alamat"]);

    // Query untuk menyimpan data ke tabel user
    $query = "INSERT INTO user (username, password, nama, email, alamat) VALUES ('$username', '$password', '$nama', '$email', '$alamat')";

    if ($koneksi->query($query) === TRUE) {
        // Registrasi berhasil
        header("Location: login.php"); // Ganti dengan halaman sukses atau halaman lain yang sesuai
        exit();
    } else {
        // Registrasi gagal, tangani kesalahan (misalnya, username sudah ada)
        $error = "Registrasi gagal: " . $koneksi->error;
    }
}

// Tutup koneksi ke database
$koneksi->close();
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            text-align: center;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #495057;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        img {
            display: block;
            margin: 10px auto;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .error {
            color: #dc3545;
            margin-bottom: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>

        <form method="post" action="register.php">
            <!-- Ganti action dengan "registrasi.php" -->

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>

            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>
