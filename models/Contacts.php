<?php

class Contacts{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo  = $pdo;
    }


    public function getContacts(): array{
        $query = $this->pdo->query("SELECT cn.id as id , cn.name as name, cn.sec_name as sec_name, cn.tel as tel, cn.email as email, cn.address as adress,cm.name as company  FROM contacts AS cn JOIN companies as cm ON cn.company_id = cm.id");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getContactById($id): array{
        $query = $this->pdo->prepare("SELECT cn.id as id , cn.name as name, cn.sec_name as sec_name, cn.tel as tel, cn.email as email, cn.address as adress,cm.name as company  FROM contacts AS cn JOIN companies as cm ON cn.company_id = cm.id WHERE cn.id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }



    public function addContact($name,$sec_name,$tel,$adress, $email, $company):void{
        
        $query = $this->pdo->prepare("INSERT INTO contacts (name,sec_name,tel,address,company_id ,email) values (? , ?, ?,? , ?, ?)");
        $query->execute([$name,$sec_name,$tel,$adress,$company, $email ]);
    }
    public function updateContact($name,$sec_name,$tel,$adress, $email, $company , $id):void{
        
        $query = $this->pdo->prepare("UPDATE contacts SET name = ?,sec_name = ?,tel = ?,address = ?,company_id = ? ,email = ? WHERE id = ?");
        $query->execute([$name,$sec_name,$tel,$adress,$company, $email, $id ]);
    }

     public function deleteContact($id):void{
        
        $query = $this->pdo->prepare("DELETE FROM contacts WHERE id = ?");
        $query->execute([$id ]);
    }


    
}