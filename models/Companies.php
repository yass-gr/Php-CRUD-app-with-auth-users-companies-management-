<?php

class Companies{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo  = $pdo;
    }


    public function getCompanies(): array{
        $query = $this->pdo->query("SELECT * FROM companies ;");
       
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCompanyById($id): array{
        $query = $this->pdo->prepare("SELECT * FROM companies WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function addCompany($name, $adress, $website):void{
        $query = $this->pdo->prepare("INSERT INTO companies (name, adress, website) values (?, ?, ?)");
        $query->execute([$name, $adress, $website]);
    }

    public function updateCompany($name, $adress, $website, $id):void{
        $query = $this->pdo->prepare("UPDATE companies SET name = ?, adress = ?, website = ? WHERE id = ?");
        $query->execute([$name, $adress, $website, $id]);
    }

    public function deleteCompany($id):void{
        $query = $this->pdo->prepare("DELETE FROM companies WHERE id = ?");
        $query->execute([$id]);
    }


    
}