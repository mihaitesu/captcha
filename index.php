<?php 
session_start();
include("Captcha.php");



header("Content-type: image/png");
// !!! no cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Captcha = new Captcha();
$Captcha->show_png();
