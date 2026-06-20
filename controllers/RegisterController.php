<?php

class RegisterController{

    public function index(){
    require_once __DIR__ . "/../middlware/auth.php";
    guestOnly();

    $errors = [
        "name" => "",
        "email" => "",
        "password" => "",
        "passwordConf" => ""
    ];
    $isValid = true;

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $passwordConf = $_POST["passwordConf"];

        if(empty($name)){
            $errors["name"] = "name is required!";
            $isValid = false;
        }
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "email is not valid!";
            $isValid = false;
        }
        if(empty($password) || strlen($password) < 8){
            $errors["password"] = "password must be 8 characters or long!!";
            $isValid = false;
        }
         if(empty($passwordConf) || $password !== $passwordConf){
            $errors["passwordConf"] = "passwords aren't matching!!";
            $isValid = false;
        }


        if ($isValid){
            require_once __DIR__ ."/../config/session.php";
            require_once __DIR__ . "/../config/db.php";
            require_once __DIR__ . "/../models/User.php";
            

            $user = new User($pdo) ;

            $user->addUser($name, $email, $password); 
            $_SESSION["user"] = $user->getUserByEmail($email);
            header(("Location: /?route=home"));
            exit();
        }
       
    }
    require_once __DIR__ . "/../views/auth/register.php";


    }

}