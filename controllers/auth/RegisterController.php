<?php

class RegisterController{

    public function index(){

    require_once __DIR__ . "/../../middlware/auth.php";
    require_once __DIR__ . "/../../middlware/inputValidation.php";


    guestOnly();

    

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $passwordConf = $_POST["passwordConf"];

        $validation = validateInputRegister($name, $email, $password, $passwordConf);


        if ($validation === true){
            require_once __DIR__ ."/../../config/session.php";
            require_once __DIR__ . "/../../config/db.php";

            $user = new User($pdo) ;

            $user->addUser($name, $email, $password); 

            $_SESSION["user"] = $user->getUserByEmail($email);

            header(("Location: /?route=home"));
            exit();
        }
       
    }
    
    require_once __DIR__ . "/../../views/auth/register.php";


    }

}