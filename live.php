<?php
header('content-type: text/plain');
$api = 'https://raw.githubusercontent.com/huwi-company/markdown.huwi.mx/main/';
$file = $_GET['f'];

@readfile($api . $file);