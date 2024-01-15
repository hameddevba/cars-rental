<?php
include_once "models/modelManager/StaffManager.php";

class StaffController
{

    public function __construct()
    {
        
    }

    public function createStaff()
    {
        if (isset($_POST)) {
        
        }

        // Assurez-vous que les données nécessaires sont présentes dans $_POST
        if (
            isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['profile']) &&
            !empty($_POST['nom']) &&
            !empty($_POST['prenom']) &&
            !empty($_POST['email']) &&
            !empty($_POST['tel']) &&
            !empty($_POST['profile'])
        ) {
            // Récupérez les données depuis $_POST
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $profile = $_POST['profile'];

            // Appeler la méthode create de StaffManager pour ajouter le membre du personnel à la base de données
            $staffId = StaffManager::createStaff($nom, $prenom, $email, $tel, $profile);

            var_dump($staffId);

            // Vous pouvez rediriger l'utilisateur vers une autre page ou renvoyer une réponse JSON, etc.
            // Exemple: header('Location: /staff/'.$staffId);
        } else {
            // Gérer l'absence ou le caractère vide des données attendues dans $_POST
            // Vous pouvez rediriger l'utilisateur vers une page d'erreur ou renvoyer une réponse JSON, etc.
            // Exemple: echo json_encode(['error' => 'Données manquantes ou vides']);
        }
        return require "views/admin/staff_list.view.php";

        // return require "views/staff/reservation.php";
    }

    public function getAllStaff()
    {
        // Appeler la méthode getAll de StaffManager pour obtenir tous les membres du personnel
        $staff = StaffManager::getAllStaff();

        return require "views/admin/staff_list.view.php";
    }

    public function viewStaff($staffId)
    {
        // Appeler la méthode read de StaffManager pour obtenir les informations d'un membre du personnel par son ID
        $staff = StaffManager::findStaffById($staffId);

        // Vous pouvez afficher les informations du membre du personnel, les renvoyer sous forme de réponse JSON, etc.
        // Exemple: echo json_encode($staff);

        return require "views/admin/staff_details.view.php";
    }

    // Ajoutez d'autres méthodes si nécessaire, telles que updateStaff, deleteStaff, etc.
}
