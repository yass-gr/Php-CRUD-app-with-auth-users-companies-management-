<?php

function isGuest(): bool{
    return empty($_SESSION["user"]);
}

function isUser(): bool{
    return !empty($_SESSION["user"]) && $_SESSION["user"]["role"] === "user";
}

function isAdmin(): bool{
    return !empty($_SESSION["user"]) && $_SESSION["user"]["role"] === "admin";
}



function guestOnly():void{
    if (!empty($_SESSION["user"])){
    header("Location: /?route=home");
    exit();
    }
}

function usersOnly():void{
    if (empty($_SESSION["user"]) || !empty($_SESSION["user"]) && $_SESSION["user"]["role"] === "admin"){
    header("Location: /?route=login");
    exit();
    }
}

function adminOnly():void{
    if (empty($_SESSION["user"]) || !empty($_SESSION["user"]) && $_SESSION["user"]["role"] === "user"){
    header("Location: /?route=login");
    exit();
    }
}

function authOnly():void{
    if (empty($_SESSION["user"])){
    header("Location: /?route=login");
    exit();
    }
}