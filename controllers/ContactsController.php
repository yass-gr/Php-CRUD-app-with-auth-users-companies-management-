<?php

class ContactsController{

    public function index(){
    
    require_once __DIR__ . "/../middlware/auth.php";
    usersOnly();
    require_once __DIR__ . "/../views/contacts/index.php";
    }

}