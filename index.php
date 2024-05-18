<?php

$request_uri = $_SERVER['REQUEST_URI'];

// Suppression de la partie de la requête après le point d'interrogation (si présente)
$request_uri = strtok($request_uri, '?');

// Séparation de l'URL en segments
$segments = explode('/', trim($request_uri, '/'));

// var_dump($segments);
require "controllers/carsController.php";
require "controllers/CustomerController.php";
require "controllers/StaffController.php";



$carController = new CarsController();

$customerController = new CustomerController();

$staffController = new StaffController();

switch($segments[0]){
    // case "": require "views/cars/cars_lists.php";
    //     break;
    case "":
        $carController->index();
        break;
    
    case "data":
       $staffcontroller->createStaff();
        break;

    case  "cars" :
        if(empty($segments[1])){

           $customerController->createCustomer();

        }elseif(is_numeric($segments[1])){

            echo "C Ba Mohamed tous marche";
        };
        break;

    case "admin" :

        // session_start();

        if (empty($segments[1])) require "views/admin/dashboard.php";


        // -----------cars-----------------------------------

        elseif($segments[1]=='getcarsbyid'){
            if(empty($segments[2])) $carController->readAllAdmin();

            elseif(is_numeric($segments[2])) $carController->getById($segments[2]);
        } 
        elseif ($segments[1]=="cars") $carController->readAllAdmin();
        // lorsqu'on modifie une voiture les donnes modifies sont envoyer vers cette itenerer
        elseif($segments[1]=="edit") $carController->update();
        elseif($segments[1]=="delete"){
            if(!empty($segments[2] && is_numeric($segments[2]))) $carController->delete($segments[2]);
        }
// --------------------------endForCars--------------------------------


// --------------------------------Customer-----------------------
        elseif($segments[1]=="customers") $customerController->getAllCustomers();
        // ---------------------endForCustomer---------------------------

        // -----------------------Staff------------------------
        elseif($segments[1]=="staff") $staffController->createStaff();
        elseif($segments[1] == "staffedit") $staffController->updateStaff();

        elseif($segments[1]=="findstaff"){
            if(!empty($segments[2])&& is_numeric($segments[2])) $staffController->findById($segments[2]);
        }
        // --------------------EndForStaff-------------------
        
        break;
        
    default:
        break;
}

?>