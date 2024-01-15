<?php

include_once "models/Customer_model.php";
include_once "models/modelManager/CustomerManager.php";



class CustomerController
{

    public function createCustomer()
    {

        if(isset($_POST)){
          
        }
        // Assurez-vous que les données nécessaires sont présentes dans $_POST
        if (
            isset($_POST['nni'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['date_nai'], $_POST['permi'], $_POST['photoId']) &&
            !empty($_POST['nni']) &&
            !empty($_POST['nom']) &&
            !empty($_POST['prenom']) &&
            !empty($_POST['email']) &&
            !empty($_POST['tel']) &&
            !empty($_POST['date_nai']) &&
            !empty($_POST['permi']) &&
            !empty($_POST['photoId'])
        ) {
            // Récupérez les données depuis $_POST
            $nni = $_POST['nni'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $date_nai = $_POST['date_nai'];
            $permi = $_POST['permi'];
            $photo_id = $_POST['photoId'];

            // Créez une instance de Customer avec les données récupérées
            $customer = new Customer($nni, $nom, $prenom, $email, $tel, $date_nai, $permi, $photo_id);

            // Appeler la méthode create de CustomerManager pour ajouter le client à la base de données
            $customerId = CustomerManager::create($customer);

            var_dump($customerId);

            // Vous pouvez rediriger l'utilisateur vers une autre page ou renvoyer une réponse JSON, etc.
            // Exemple: header('Location: /customers/'.$customerId);
        } else {
            // Gérer l'absence ou le caractère vide des données attendues dans $_POST
            // Vous pouvez rediriger l'utilisateur vers une page d'erreur ou renvoyer une réponse JSON, etc.
            // Exemple: echo json_encode(['error' => 'Données manquantes ou vides']);
        }

        return require "views/cars/reservation.php";
    }

    public function getAllCustomers()
    {
        // Appeler la méthode getAll de CustomerManager pour obtenir tous les clients
        $customers = CustomerManager::getAll();

        return require "views/admin/customer_list.view.php";

    }

   


    public function viewCustomer($customerId)
    {
        // Appeler la méthode read de CustomerManager pour obtenir les informations d'un client par son ID
        $customer = CustomerManager::read($customerId);

        // Vous pouvez afficher les informations du client, les renvoyer sous forme de réponse JSON, etc.
        // Exemple: echo json_encode($customer);
    }

    // Ajoutez d'autres méthodes si nécessaire, telles que updateCustomer, deleteCustomer, etc.
}
