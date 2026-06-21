<?php

class LoginController{

    public function index():void{
    require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    guestOnly();

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        require_once __DIR__ . "/../../config/db.php";
        $user = new User($pdo) ;
        
        $isAuthenticated = $user->authenticate($email, $password); 

        if ($isAuthenticated){
            $_SESSION["user"] = $user->getUserByEmail($email);
            header(("Location: /?route=home"));
            exit();
        }else{
            $error  =  "Incorrect email or password !!!";
        }
       
    }
    
    require_once __DIR__ . "/../../views/auth/login.php";


    }

}