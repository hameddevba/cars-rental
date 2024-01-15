<?php
require_once "config/DBConnection.php";

class CustomerManager
extends DBConnection
{

    public static function create(Customer $customer)
    {
        $stmt = self::getDBconnect()->prepare("INSERT INTO customer (nni, nom, prenom, email, tel, date_nai, permi, photo_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $customer->getNni(),
            $customer->getNom(),
            $customer->getPrenom(),
            $customer->getEmail(),
            $customer->getTel(),
            $customer->getDateNai(),
            $customer->getPermi(),
            $customer->getPhotoId()
        ]);
        return self::getDBconnect()->lastInsertId(); // Retourne l'ID du nouveau client créé
    }

    

    public static function getAll()
    {
        $stmt = self::getDBconnect()->prepare("SELECT * FROM customer");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Lire un client par son ID
    public function read($id)
    {
        $stmt = $this->getDBconnect()->prepare("SELECT * FROM customer WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }

    // Ajoutez d'autres méthodes si nécessaire, comme la mise à jour, la suppression, etc.
}
