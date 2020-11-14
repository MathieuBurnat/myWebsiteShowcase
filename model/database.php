<?php
class Database {
    function __construct()
    {
        
    }

    function CheckConnection($username, $hashedPassword){
        //check into the db if the user has this hashed password.

        //return true if it is

        //otherwise, return false

        return true; //*for the moment, we just set true, we'll do the sql research later.
    }

    function SubmitContent($username, $content){
        //Send content to the database
        
        //echo $username . " : " . $content;
        return true;
    }
}