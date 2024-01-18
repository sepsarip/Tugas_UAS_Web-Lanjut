<?php
session_start();

function acakCaptcha(){
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $pass = array();

    $panjang_kode = strlen($alphabet) - 2; // Panjang CAPTCHA
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $panjang_kode);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

$code = acakCaptcha();
$_SESSION["code"] = $code;

$gambar = imagecreatetruecolor(100, 40);

// Ubah warna background menjadi hijau (0, 128, 0)
$warna_bg = imagecolorallocate($gambar, 101, 166, 215);

// Ubah warna text menjadi putih (255, 255, 255)
$warna_text = imagecolorallocate($gambar, 255, 255, 255);

imagefill($gambar, 0, 0, $warna_bg);

$font = 4;

// Ubah font style menjadi bold (5)
imagestring($gambar, 5, 20, 10, $code, $warna_text);

header('content-type: png');
imagepng($gambar);
imagedestroy($gambar);
?>
