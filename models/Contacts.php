<?php

class Contacts{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo  = $pdo;
    }


    public function getContacts(): array{
        $query = $this->pdo->query("SELECT cn.id as id , cn.name as name, cn.sec_name as sec_name, cn.tel as tel, cn.email as email, cn.address as adress,cm.name as company  FROM contacts AS cn JOIN companies as cm");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    
}