<?php

class ContactsController{

    public function index(){
   require_once __DIR__ ."/../../config/session.php";
    require_once __DIR__ . "/../../middlware/auth.php";
    require_once __DIR__ . "/../../config/db.php";




    usersOnly();
    $contactsObj = new Contacts($pdo);

    $deleteId = $_GET["id"] ?? "";
    if (!empty($deleteId)){
        $contactsObj->deleteContact($deleteId);
    };
    


    $contacts = $contactsObj->getContacts();
    require_once __DIR__ . "/../../views/contacts/index.php";
    }

}