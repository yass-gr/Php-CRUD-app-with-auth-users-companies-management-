<?php

class HomeController{

    public function index() :void{
    require_once __DIR__ ."/../config/session.php";
    require_once __DIR__ . "/../middlware/auth.php";
    require_once __DIR__ . "/../views/home.php";


    }

}