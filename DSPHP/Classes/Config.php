<?php

class Config{

    public static $BASE_URL="http://127.0.0.1/fnak/dsphp/";
    static function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }
}


?>