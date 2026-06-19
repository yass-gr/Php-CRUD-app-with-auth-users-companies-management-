<?php

class LoginController{

    public function index(){
    require_once __DIR__ . "/../middlware/auth.php";
    guestOnly();

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        

        require_once __DIR__ . "/../models/User.php";
        $user = new User() ;
        
        $isAuthenticated = $user->authenticate($email, $password); 

        if ($isAuthenticated){
            header(("Location: /?route=home"));
        }else{
            $error  =  "Incorrect email or password !!!";
        }
    }
    require_once __DIR__ . "/../views/auth/login.php";


    }

}