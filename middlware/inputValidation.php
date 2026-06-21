<?php

function validateInputRegister(string $name, string $email, string $password, string $passwordConf) :bool|array{
    $errors = [
        "name" => "",
        "email" => "",
        "password" => "",
        "passwordConf" => ""
    ];
    $isValid = true;

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


    return $isValid ? true : $errors;
}

function validateInputContact(string $name, string $secName, string $tel, string $adress, string $email, string $company) :bool|array{
    $errors = [
        "name" => "",
        "sec_name" => "",
        "tel" => "",
        "adress" => "",
        "email" => "",
        "company" => ""
    ];
    $isValid = true;

    if(empty($name)){
        $errors["name"] = "Name is required!";
        $isValid = false;
    }
    if(empty($secName)){
        $errors["sec_name"] = "Second name is required!";
        $isValid = false;
    }
    if(empty($tel) || strlen($tel) > 10){
        $errors["tel"] = "Tel must be 10 characters or less!!";
        $isValid = false;
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "email is not valid!";
        $isValid = false;
    }
    if(empty($adress)){
        $errors["adress"] = "Adress is required!";
        $isValid = false;
    }
    if($company === "Company"){
        $errors["company"] = "Company is required!";
        $isValid = false;
    }

    return $isValid ? true : $errors;
}

function validateInputCompany(string $name, string $adress, string $website) :bool|array{
    $errors = [
        "name" => "",
        "adress" => "",
        "website" => ""
    ];
    $isValid = true;

    if(empty($name)){
        $errors["name"] = "Name is required!";
        $isValid = false;
    }
    if(empty($adress)){
        $errors["adress"] = "Adress is required!";
        $isValid = false;
    }

    return $isValid ? true : $errors;
}