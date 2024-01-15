<?php
require_once "config/DBConnection.php";
// require "../Staff_model.php";


class StaffManager extends DBConnection
{
    // Méthode pour récupérer tous les membres du personnel
    public static function getAllStaff()
    {
        $sql = "SELECT * FROM staff";
        $stmt = self::getDBconnect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Méthode pour ajouter un nouveau membre du personnel
    public static function createStaff(Staff $staff)
    {
        $sql = "INSERT INTO staff (nom, prenom, email, tel, profile)
            VALUES (:nom, :prenom, :email, :tel, :profile)";

        $stmt = self::getDBconnect()->prepare($sql);

        // Utiliser les propriétés de l'objet Staff pour la requête
        $stmt->bindParam(":nom", $staff->getNom());
        $stmt->bindParam(":prenom", $staff->getPrenom());
        $stmt->bindParam(":email", $staff->getEmail());
        $stmt->bindParam(":tel", $staff->getTel());
        $stmt->bindParam(":profile", $staff->getProfile());

        $stmt->execute();

        return $stmt->rowCount();
    }


    // Méthode pour modifier un membre du personnel
    public static function updateStaff($id, $nom, $prenom, $email, $tel, $profile)
    {
        $sql = "UPDATE staff
                 SET nom = :nom,
                     prenom = :prenom,
                     email = :email,
                     tel = :tel,
                     profile = :profile
                 WHERE id = :id";
        $stmt = self::getDBconnect()->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":tel", $tel);
        $stmt->bindParam(":profile", $profile);

        $stmt->execute();

        return $stmt->rowCount();
    }

    // Méthode pour supprimer un membre du personnel
    public static function deleteStaff($id)
    {
        $sql = "DELETE FROM staff
                 WHERE id = :id";
        $stmt = self::getDBconnect()->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->rowCount();
    }

    // Méthode pour rechercher un membre du personnel par nom
    public static function findStaffByName($nom)
    {
        $sql = "SELECT * FROM staff
                 WHERE nom = :nom";
        $stmt = self::getDBconnect()->prepare($sql);

        $stmt->bindParam(":nom", $nom);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    // Méthode pour rechercher un membre du personnel par ID
    public static function findStaffById($id)
    {
        $sql = "SELECT * FROM staff
                 WHERE id = :id";
        $stmt = self::getDBconnect()->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}
