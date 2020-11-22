<?php

include "server/system/config.php";

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/URL_sh/' :
        require __DIR__ . '\server\routes\index.php';
        break;
    case '/URL_sh/all':
        require __DIR__ . '\server\routes\all.php';
        break;
    default:
            require "server/functions_and_utilities/fetch_url.php";
            http_response_code(404);
            require __DIR__ . '\server\routes\404.php';
        break;
}
?>