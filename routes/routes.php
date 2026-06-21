<?php







$route = $_GET["route"] ?? "home";


switch ($route) {
    

    //auth
    case "login": 
        $controller = new LoginController();
        $controller->index();
        break;
    case "register": 
        $controller = new RegisterController();
        $controller->index();
        break;
    case "logout": 
        $controller = new LogoutController();
        $controller->index();
        break;

    //-------

    //contacts
    case "contacts": 
        $controller = new ContactsController();
        $controller->index();
        break;

    case "contacts/add": 
        $controller = new addContactsController();
        $controller->index();
        break;
    case "contacts/update": 
        $controller = new updateContactsController();
        $controller->index();
        break;

    //-------

    //companies
    case "companies": 
        $controller = new CompaniesController();
        $controller->index();
        break;

    case "companies/add": 
        $controller = new addCompaniesController();
        $controller->index();
        break;
    case "companies/update": 
        $controller = new updateCompaniesController();
        $controller->index();
        break;
    //---------
    

    

    default: 
        $controller = new HomeController();
        $controller->index();
        break;



};




