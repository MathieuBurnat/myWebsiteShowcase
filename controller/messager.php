<?php

class Messager {
    public static $contactOutputMessage = "";

    static function SetOutputMessage($content, $type){
        
        switch($type){
            case 'info':
                    self::$contactOutputMessage = "<div class='outputMessage outputMessage-info'> $content </div>";
                break;
            case 'error':
                    self::$contactOutputMessage = "<div class='outputMessage outputMessage-error'> $content </div>";
                break;
            default:
                    self::$contactOutputMessage = "<div class='outputMessage'> $content </div>";
                break;
        }
    }
}
