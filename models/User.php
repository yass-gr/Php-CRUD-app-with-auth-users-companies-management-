<?php

class User{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo  = $pdo;
    }


    public function authenticate(string $email, string $password): bool {
    $query = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
    $query->execute([$email]);
    $user = $query->fetch();
    if ($user){
        $isPasswordCorrect = password_verify($password, $user["password"]);
        return $isPasswordCorrect;
    }else{
        return false;
    }   
    }


    public function addUser($name, $email, $password):void{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = $this->pdo->prepare("INSERT INTO users (name, email, password) values (? , ?, ?)");
        $query->execute([$name, $email, $hash]);
    }

    public function getUserByEmail($email, ):array|bool{
        
        $query = $this->pdo->prepare("SELECT name,email,role FROM users WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch();
    }



    
}