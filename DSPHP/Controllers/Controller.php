<?php
require_once './DAO/ProductDAO.php';
class Controller{
    public static function Index($viewName){
        require_once("./Views/$viewName");

    }
}

?>