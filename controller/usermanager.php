<?php
require("model/database.php");
//Check if the user is connected
//In concequence, change buttons
class UserManager {
    public $displayConnectedButton = true;
    public $displaySubmitButton = false;
    public $contactOutputMessage = "My message";

    function __construct()
    {
        
    }
    
    function Register($name, $password){
        //Register the user.
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

    function connect($username, $password){
        $db = new Database();
        //echo "<h2>Test the connection with the user : " .$username." and his password : ".$password."</h2> <br>";
        //echo "Hashed password : ".$this->hashPassword($password);

        if($db->CheckConnection($username, $this->hashPassword($password))){
            //Username and password are correct
            //Creation of the user session !
            $_SESSION["user"] = $username;

        }else{
            //Wrong passsword or user
        }
    }

    //The function hasPassword is usefull because it will be use to complexifiy the hash with a salt later.
    function hashPassword($password){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $hashedPassword;
    }

    function SubmitContent($content){
        $db = new Database();

        if($db->SubmitContent($_SESSION["user"], $content))
        {
            $this->contactOutputMessage = "<div class='outputMessage outputMessage-info'> 'Votre message a correctement été envoyé !' </div>";
        }else{
            $this->contactOutputMessage = "<div class='outputMessage outputMessage-error'> 'Un problème est apparut lors de l'envoi de votre message, veuillez ressayer plus tard..' </div>";
        }
    }
}
