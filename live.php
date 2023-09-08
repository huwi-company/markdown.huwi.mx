<?php
header('content-type: text/plain');
$api = 'https://raw.githubusercontent.com/huwi-company/markdown.huwi.mx/main/';
$file = $_GET['f'];
if(empty($file)) {
    die('File is required');
}

@readfile($api . $file);