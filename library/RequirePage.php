<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
    static public function redirectPage($page){
        return header("Location: http://localhost:7080/NePasEffacerSVP_WebAvancee/seance19/".$page);
    }
}

?>