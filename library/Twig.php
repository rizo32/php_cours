<?php

class Twig{
    static public function render($template, $data = array()){
        $loader = new \Twig\Loader\FilesystemLoader('view');
       // $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        $twig->addGlobal('path', 'http://localhost/PHP/TP2/code/');
        echo $twig->render($template, $data);
    }
}

?>