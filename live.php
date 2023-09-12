<?php
header('content-type: text/plain');
$api = 'https://raw.githubusercontent.com/huwi-company/markdown.huwi.mx/main/';
$file = $_GET['f'];
if(empty($file)) {
    die('File is required');
}
try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api . $file . '?v=' .rand());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'User-Agent: '.$_SERVER['HTTP_USER_AGENT'],
        'Pragma: no-cache',
        'Cache-Control: no-cache'
    ]);    
    @curl_exec($ch);
    @curl_close($ch);
}
catch(Exception $e) {
    die("Error while fetching file");
}