<?php
    //Active sessions
    session_start();
    $_SESSION["user"] = "Mathieu";
    
    //DEV :: Display Errors
    $devMode = false;
    if($devMode){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    require('controller/router.php');
?>