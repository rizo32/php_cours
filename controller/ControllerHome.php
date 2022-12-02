<?php

class ControllerHome{

    public function index(){

      $data =['name' =>'Peter', 
              'welcome' => 'Welcome'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }
}