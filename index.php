<?php

$server_url = 'http://' . $_SERVER["SERVER_NAME"];
if($_SERVER["SERVER_NAME"] == 'localhost') {
    $server_url = 'http://localhost';
    $REQUEST_URI = explode('/', $_SERVER["REQUEST_URI"]);
    if(isset($REQUEST_URI[1])) {
        $server_url = 'http://localhost/' . $REQUEST_URI[1];
    }
}

define('SERVER_URL', $server_url . '/');
$request_uri = $_GET['request'] ?? 'main';
require_once 'page_view.php';
