<?php
// Memasukkan file koneksi.php
include '../admin/koneksi.php';

// Memulai sesi
session_start();

$error = '';
$validate = '';

// Memeriksa jika pengguna sudah login
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Memeriksa apakah form telah disubmit
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Memeriksa apakah username dan password tidak kosong
    if (!empty(trim($username)) && !empty(trim($password))) {
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah query berhasil dijalankan dan mengambil baris hasil
        if ($result && $row = mysqli_fetch_assoc($result)) {
            $hash = $row['password'];

            // Memverifikasi password menggunakan password_verify
            // if (password_verify($password, $hash)) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
                $_SESSION['logged_in'] = true;
            //     exit();
            // } else {
            //     $validate = 'Login failed!';
            // }
        } else {
            $validate = 'Login failed!';
        }
    } else {
        $error = 'Data cannot be empty!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.hero {
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(https://images.pexels.com/photos/2280551/pexels-photo-2280551.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-position: center;
    background-size: cover;
    position: absolute;
}

.form-box{
        width: 380px;
        height: 480px;
        position: relative;
        margin: 6% auto;
        background: #fff;
        padding: 5px;
        overflow: hidden;
    }

    .button-box{
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #ff61241f;
        border-radius: 30px;
    }

    .toggle-btn{
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    #btn{
     top: 0;
     left: 0;
     position: absolute;
     width: 110px;
     height: 100%;
     background: linear-gradient(to right, #1eb9c5, #65a6d7);
     border-radius: 30px;
     transition: .5s;  
    }

    .social-icons{
        margin: 30px auto;
        text-align: center;
       }
       .social-icons i{
        width: 30px;
        margin: 0 12px;
        box-shadow: 0 0 20px 0 #7f7f7f3d;
        cursor: pointer;
        border-radius: 50%;
       }

       .input-group{
        top: 170px;
        position: absolute;
        width: 280px;
        transition: .5s;
       }

       .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
       }

       .submit-btn{
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        margin-top: 20px;
        background: linear-gradient(to right, #1eb9c5, #65a6d7);
        border: 0;
        outline: none;
        border-radius: 30px;
       }

       span{
        color: #777;
        font-size: 12px;
        bottom: 60px;
        position: absolute;
       }

       #login{
        left: 50px;
       }
       
       #register{
        left: 450px;
       }

    </style>
</head>
<body>

<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
        </div>
        <form id="login" method="post" action="login.php" class="input-group">
        <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <input type="text" name="username" id="username" class="input-field" placeholder="Username" required>
            <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
            <label for="showPassword">
                <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Show Password
            </label>
            <div class="captcha-container pe-3">
                <img src="../admin/captcha.php" alt="CAPTCHA">
            </div>
            <input type="text" name="captcha" id="captcha" required>
            <button type="submit" name="login" value="Login" class="submit-btn">Login</button>
        </form>
        <form id="register" method="post" action="register.php" class="input-group">
        <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <input type="text" name="username" id="username" class="input-field" placeholder="Username" required>
            <input type="text" name="password" id="password" class="input-field" placeholder="Enter Password" required>
            <input type="text" name="nama" id="nama" class="input-field" placeholder="Nama" required>
            <input type="text" name="email" id="email" class="input-field" placeholder="Email" required>
            <input type="text" name="alamat" id="alamat" class="input-field" placeholder="Alamat" required>
            <button type="submit" name="register" value="Register" class="submit-btn">Register</button>
        </form>
    </div>
</div>

<script>
    var loginForm = document.getElementById("login");
    var registerForm = document.getElementById("register");
    var btn = document.getElementById("btn");

    function login() {
        loginForm.style.left = "50px";
        registerForm.style.left = "450px";
        btn.style.left = "0";
        registerForm.action = "login.php"; // Update the action attribute
    }

    function register() {
        loginForm.style.left = "-400px";
        registerForm.style.left = "50px";
        btn.style.left = "110px";
        registerForm.action = "register.php"; // Update the action attribute
    }

    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("showPassword");

        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>


</body>
</html>
