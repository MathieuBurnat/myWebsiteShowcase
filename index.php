<?php
    //Display Errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $request = '';
    $get_params_offset = stripos($_SERVER['REQUEST_URI'], '?');

    // Remove GET parameters from request uri
    if ($get_params_offset) {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_params_offset);
    } else {
        $request = $_SERVER['REQUEST_URI'];
    }

    switch ($request) {
        case '' :
        case '/' :
            require 'View/homepage.php'; //home directory
            break;
        case '/bio' :
            require 'View/bio.php';
            break;
        default:
            http_response_code(404);
            require 'View/Error_404.php'; //Aie, something wrong ! (page not found)
            break;
    }
?>