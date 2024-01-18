    <?php 
        session_start();
        include 'koneksi.php';

        $error = '';
        $validate = '';

        //jika ada session username, maka akan direct tampilan ke index.php
        if (isset($_SESSION["username"])) {
            header("Location:index.php");
        }

        if (isset($_POST["login"])) {
            if(isset($_POST['captcha'])){
                if($_SESSION["code"] != $_POST["captcha"]){
                    //jika code captcha salah mmaka akan kembali ke halaman sebelumnya
                    echo "<script>alert('captcha yang anda masukkan salah');</script>";
                }else{
                    $username = stripslashes($_POST['username']);
                    $username = mysqli_real_escape_string($koneksi, $username);
                    $password = stripslashes($_POST['password']);
                    $password = mysqli_real_escape_string($koneksi, $password);

                    $query = "SELECT * FROM admin WHERE username = '$username'";
                    $result = mysqli_query($koneksi,$query);
                    $rows = mysqli_num_rows($result);

                    if($rows != 0){
                        // $hash = mysqli_fetch_assoc($result)['password'];
                        // if(password_verify($password, $hash)) {
                            $_SESSION["username"] = $username;
                            header('Location: index.php');
                        // }
                        echo "<script>alert('captcha berhasil');</script>";
                    }else {
                        $error = 'login Gagal !!';
                    }
                }
            }
            
        }else{
            $error = 'Data tidak boleh kosong !!';
        }
        
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
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
            background-color: #007bff;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            margin-bottom: 16px;
            text-align: center;
        }

        .captcha-container {
            text-align: center;
            margin:auto;
            margin-top: 20px;
        }
        .captcha-image {
            display: inline-block;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin: auto;
            
        }
        </style>
</head>
<body>
<div class="login-container">
        <h1>Login Admin</h1>

        <form action="" method="POST">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="captcha">CAPTCHA:</label>
            <div class="captcha-container">
                <img src="captcha.php" alt="CAPTCHA">
            </div>
            <input name="captcha" required>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>