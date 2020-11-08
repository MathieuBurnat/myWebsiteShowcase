<?php

//Check if the user is connected
//In concequence, change buttons
class Controller {
    public $displayConnectedButton = true;
    public $displaySubmitButton = false;

    function __construct()
    {
        
    }
    
    function CheckUserIsConnected(){
        //If the user isn't connected
        if(!isset($_SESSION['user'])){
            echo("<h1>Not Connected</h1>");
            //Replace the submit button per the black-login-button with a text message like "huh, you should be connected"
            $displaySubmitButton = false;
    
            //Let the connected button.
            $displayConnectedButton = true;
    
        }else{ //If the use is connected
            echo("<h1>Not Connected</h1>");
            //Let the black-submit-button
            $displaySubmitButton = true;
    
            //Replace the connected-button by a green-box that make a yelled-hello to the user with a red-disconnect-button behind.
            $displayConnectedButton = false;
        }
    }
}

