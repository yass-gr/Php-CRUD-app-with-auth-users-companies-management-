<?php

class updateCompaniesController{

    public function index(){
    require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    require_once __DIR__ . "/../../middlware/inputValidation.php";
    require_once __DIR__ . "/../../config/db.php";

    



    adminOnly();

    $company = new Companies($pdo)->getCompanyById($_GET["id"]);


    if ($_SERVER["REQUEST_METHOD"] === "POST"){
       
        $name = trim($_POST["name"]);
        $adress = trim($_POST["adress"]);
        $website = trim($_POST["website"]);

        $validation = validateInputCompany($name, $adress, $website);

        if ($validation === true){
            $company = new Companies($pdo) ;

            $company->updateCompany($name, $adress, $website, $_GET["id"]); 
            header(("Location: /?route=companies"));
            exit();
        }
       
    }
    
    require_once __DIR__ . "/../../views/companies/update.php";
    }

}
