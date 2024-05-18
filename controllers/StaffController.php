<?php
include_once "models/modelManager/StaffManager.php";
include_once "models/Staff_model.php";


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
            // Créez un objet Staff avec les données POST


            // Appeler la méthode create de StaffManager pour ajouter le membre du personnel à la base de données
            $staffId = StaffManager::createStaff(new Staff(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['tel'],
                $_POST['profile']
            ));

            // Redirige l'utilisateur vers la page de liste des membres du personnel
            // header('Location: /staff');

        }

        // var_dump($staffs);
        return require "views/admin/staff_list.view.php";
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

    public function findById($theId){
        echo (StaffManager::findStaffById($theId));
    }


    function updateStaff()
    {
        // Vérifier que les données POST sont présentes
        if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) || !isset($_POST['tel']) || !isset($_POST['profile'])) {
            die('Erreur : les données POST sont manquantes.');
        }else{
            header("location:staff");
        }

        // Récupérer les données POST
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $profile = $_POST['profile'];

        // Vérifier la validité des données POST
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('Erreur : l\'adresse email n\'est pas valide.');
        }

       if(StaffManager::updateStaff($id,$nom,$prenom,$email,$tel,$profile)) header("location:staff");
    }
}
