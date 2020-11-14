<?php

class Messager {
    public static $contactOutputMessage = "";

    static function SetOutputMessage($content, $type){

        self::$contactOutputMessage = "<div class='outputMessage outputMessage-$type'> $content </div>";
        
        //self::$contactOutputMessage = "<div class='outputMessage outputMessage-info'> 'Votre message a correctement été envoyé !' </div>";

        //... Un problème est apparut lors de l'envoi de votre message, veuillez ressayer plus tard..
    }
}
