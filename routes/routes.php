<?php

require_once __DIR__ . "/../controllers/HomeController.php";
require_once __DIR__ . "/../controllers/ContactsController.php";
require_once __DIR__ . "/../controllers/LoginController.php";
require_once __DIR__ . "/../controllers/RegisterController.php";
require_once __DIR__ . "/../controllers/LogoutController.php";





$route = $_GET["route"] ?? "home";


switch ($route) {
    case "home": 
        $controller = new HomeController();
        $controller->index();
        break;


    case "contacts": 
        $controller = new ContactsController();
        $controller->index();
        break;

    case "login": 
        $controller = new LoginController();
        $controller->index();
        break;
    case "register": 
        $controller = new RegisterController();
        $controller->index();
        break;
    case "logout": 
        $controller = new LogoutController();
        $controller->index();
        break;
};




