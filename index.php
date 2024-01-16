<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Suppression de la partie de la requête après le point d'interrogation (si présente)
$request_uri = strtok($request_uri, '?');

// Séparation de l'URL en segments
$segments = explode('/', trim($request_uri, '/'));


require "controllers/carsController.php";
require "controllers/CustomerController.php";
require "controllers/StaffController.php";



$carController = new CarsController();

$customerController = new CustomerController();

$staffcontroller = new StaffController();
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
        if (empty($segments[1])) require "views/admin/dashboard.php";

        elseif($segments[1]=='add_cars') $carController->create();

        elseif ($segments[1]=="cars") $carController->readAllAdmin();

        elseif($segments[1]=="customers") $customerController->getAllCustomers();
        
        elseif($segments[1]=="staff") $staffcontroller->createStaff();
        
        break;
        
    default:
        break;
}

?>