<?php

class CompaniesController{

    public function index(){
   require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    require_once __DIR__ . "/../../config/db.php";




    adminOnly();

    $validation;

    $companiesObj = new Companies($pdo);

    $deleteId = $_GET["id"] ?? "";
    if (!empty($deleteId)){
        try{
        $companiesObj->deleteCompany($deleteId);
        }catch(PDOException $e){
            $validation = "Cannot delete company with existing contacts!";
        }
    };
    


    $companies = $companiesObj->getCompanies();
    require_once __DIR__ . "/../../views/companies/index.php";
    }

}
