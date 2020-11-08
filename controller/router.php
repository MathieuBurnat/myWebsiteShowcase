<?php
    require('controller/controller.php');
    $usrManger = new UserManager();

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
        //Router dev request (-> Dev tests+)
        case '/dev-header' :
            $path = "view/header.php";
            break;
        case '/dev-footer' :
            $path = "view/footer.php";
            break;
        case '/dev-calendar' :
            $path = "view/calendar.php";
            break;
        //Normal request (-> Go to x-page.php)
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
        // Actions requests (-> Use for inetect with the MVC stucture (example (action->disconect)))
        case '/action-disconnect':
            unset($_SESSION["user"]);
            $path = "view/contact.php";
            break;
        case '/action-connect': 
            $usrManger->connect($_POST["uname"], $_POST["psw"]);
            break;
        default: //Aie, something wrong ! (the page's not found)
            http_response_code(404);
            $path = "view/Error_404.php"; 
            break;
    }
    require('view/layout.php');
?>