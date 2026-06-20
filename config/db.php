<?php


try{
    $pdo = new PDO("mysql:host=localhost;dbname=gestion_contacts_companies","root","fmcharmal");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){

    exit($e->getMessage());
}