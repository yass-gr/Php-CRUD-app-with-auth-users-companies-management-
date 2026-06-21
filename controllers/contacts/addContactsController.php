<?php

class addContactsController{

    public function index(){
    require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    require_once __DIR__ . "/../../middlware/inputValidation.php";
    require_once __DIR__ . "/../../config/db.php";




    usersOnly();

    $companies = new Companies($pdo)->getCompanies();


    if ($_SERVER["REQUEST_METHOD"] === "POST"){
       
        $name = trim($_POST["name"]);
        $secName = trim($_POST["sec_name"]);
        $tel = trim($_POST["tel"]);
        $adress = trim($_POST["adress"]);
        $email = trim($_POST["email"]);
        $company = trim($_POST["company"]);

        $validation = validateInputContact($name, $secName, $tel, $adress, $email, $company);

        if ($validation === true){
            $user = new Contacts($pdo) ;

            $user->addContact($name,$secName,$tel,$adress, $email, $company); 
            header(("Location: /?route=contacts"));
            exit();
        }
       
    }
    
    require_once __DIR__ . "/../../views/contacts/add.php";
    }

}