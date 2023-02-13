<?php
class Http
{

public static function redirect(string $Url){
    header("Location:$Url");
    exit();
    }
}
    ?>