<?php
header('content-type: text/plain');
$api = 'https://raw.githubusercontent.com/huwi-company/markdown.huwi.mx/main/';
$file = $_GET['f'];
if(empty($file)) {
    die('File is required');
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api . $file);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);