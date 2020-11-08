<?php

    $request = '';
    $get_params_offset = stripos($_SERVER['REQUEST_URI'], '?');

    // Remove GET parameters from request uri
    if ($get_params_offset) {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_params_offset);
    } else {
        $request = $_SERVER['REQUEST_URI'];
    }

    $path = "";
    switch ($request) {
        //Router dev request
        case '/dev-header' :
            $path = "view/header.php";
            break;
        case '/dev-footer' :
            $path = "view/footer.php";
            break;
        case '/dev-calendar' :
            $path = "view/calendar.php";
            break;
        //Normal request
        case '' :
        case '/' :
            $path = "view/homepage.php";
            break;
        case '/bio' :
            $path = "view/bio.php";
            break;
        case '/info-dev' :
            $path = "view/info-dev.php";
            break;
        case '/info-crea-tech' :
            $path = "view/info-crea-tech.php";
            break;    
        case '/marketing' :
            $path = "view/marketing.php";
            break;    
        case '/divers' :
            $path = "view/divers.php";
            break;
        case '/contact' :
            $path = "view/contact.php";
            break; 
        default:
            http_response_code(404);
            $path = "view/Error_404.php"; //Aie, something wrong ! (page not found)
            break;
    }
    require('view/layout.php');
?>