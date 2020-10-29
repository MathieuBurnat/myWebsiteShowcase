<?php
    require('view/layout.php');

    $request = '';
    $get_params_offset = stripos($_SERVER['REQUEST_URI'], '?');

    // Remove GET parameters from request uri
    if ($get_params_offset) {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_params_offset);
    } else {
        $request = $_SERVER['REQUEST_URI'];
    }

    switch ($request) {
        //Router dev request
        case '/dev-header' :
            require 'view/header.php';
            break;
        //Normal request
        case '' :
        case '/' :
            require 'view/homepage.php';
            break;
        case '/bio' :
            require 'view/bio.php';
            break;
        case '/info-dev' :
            require 'view/info-dev.php';
            break;
        case '/info-crea-tech' :
            require 'view/info-crea-tech.php';
            break;            
        case '/marketing' :
            require 'view/marketing.php';
            break;            
        case '/divers' :
            require 'view/divers.php';
            break;
        case '/contact' :
            require 'view/contact.php';
            break; 
        default:
            http_response_code(404);
            require 'view/Error_404.php'; //Aie, something wrong ! (page not found)
            break;
    }
?>