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
        if((!$_SESSION["user"]))
        {
            //Replace the submit button per the black-login-button with a text message like "huh, you should be connected"
            $this->displaySubmitButton = false;
    
            //Let the connected button.
            $this->displayConnectedButton = true;
    
        }else{ //If the use is connected
            //Let the black-submit-button
            $this->displaySubmitButton = true;
    
            //Replace the connected-button by a green-box that make a yelled-hello to the user with a red-disconnect-button behind.
            $this->displayConnectedButton = false;
        }
    }
}

