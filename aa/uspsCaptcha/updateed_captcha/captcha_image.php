<?php
session_start();

function generateCaptchaImage($text) {
    $width = 120;
    $height = 40;
    $image = imagecreate($width, $height);
    $bgColor = imagecolorallocate($image, 255, 255, 255);
    $textColor = imagecolorallocate($image, 0, 0, 0);
    $font = 5; // Built-in font size
    $textBoundingBox = imagefontheight($font);
    $x = ($width - imagefontwidth($font) * strlen($text)) / 2;
    $y = ($height - $textBoundingBox) / 2;
    imagestring($image, $font, $x, $y, $text, $textColor);
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
}

if(isset($_SESSION['captcha'])) {
    generateCaptchaImage($_SESSION['captcha']);
}
?>
