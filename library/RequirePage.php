<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
    static public function redirectPage($page){
        return header("Location: http://maisonneuve:7080/PHP/cours19/".$page);
    }
}

?>