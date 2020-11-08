<?php

//Check if the user is connected
//In concequence, change buttons
class Controller {
    public $displayConnectedButton = true;
   
    function __construct()
    {
        
    }
    
    function CheckUserIsConnected(){
        //If the user isn't connected
        if(!isset($_SESSION['user'])){
            echo("<h1> not connected </h1>");
    
            //Replace the submit button per the black-login-button with a text message like "huh, you should be connected"
            //Let the connected button.
            $connectedButton = false;
    
        }else{ //If the use is connected
            echo("<h1>  connected </h1>");
            //Let the black-submit-button
            
    
            //Replace the connected-button by a green-box that make a yelled-hello to the user with a red-disconnect-button behind.
        }
    
    }
}

