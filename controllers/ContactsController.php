<?php

class ContactsController{

    public function index(){
    require_once __DIR__ ."/../config/session.php";
    require_once __DIR__ . "/../middlware/auth.php";
    require_once __DIR__ . "/../config/db.php";
    require_once __DIR__ . "/../models/Contacts.php";



    usersOnly();


    $contacts = new Contacts($pdo)->getContacts();
    require_once __DIR__ . "/../views/contacts/index.php";
    }

}