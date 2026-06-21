<?php

class LogoutController{

    public function index() : void{
    require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    authOnly();

   

    if (!empty($_GET["logout"]) && $_GET["logout"] === "true"){
        $_SESSION = [];
        setcookie("PHPSESSID", "", time()- 3600);
        session_destroy();
        header("Location: /?route=home");
        exit();

    }
   else{
     require_once __DIR__ . "/../../views/auth/logout.php";
   }


    }

}