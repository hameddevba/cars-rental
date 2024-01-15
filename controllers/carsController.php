<?php

// require  dirname(__FILE__)."/libs/view.php";
include_once  "models/Cars_model.php";
include_once "models/modelManager/CarsManager.php";


class CarsController{
    
    public function index(){
        return require "views/cars/cars_lists.php";
    }

    public function create(){

            
        if (isset($_POST['brand'])) {
            $brand = trim($_POST['brand']);
            $modele = trim($_POST['modele']);
            $an = trim($_POST['an']);
            $immatri = trim($_POST['immatri']);
            $couleur = trim($_POST['couleur']);
            $transmission = trim($_POST['tramission']);
            $category = trim($_POST['category']);
            $engin = trim($_POST['engin']);
            $price = trim($_POST['price']);
            $description = trim($_POST['description']);


            // Vérifier que les champs obligatoires sont remplis
            if (empty($brand) || empty($modele) || empty($an) || empty($couleur) || empty($transmission) || empty($category) || empty($engin) || empty($price)) {
                echo '<script>alert("Veuillez remplir tous les champs obligatoires.");</script>';
            }else{
                $car = new Cars($brand, $modele, $an, $immatri, $couleur, $transmission, $category, $engin, $price, $description);
                CarsManager::create($car);
                //redirect 
                header('Location:cars_list');
            }

            // Vérifier que la date d'année est valide
            if (!preg_match("/\d{4}/", $an)) {
               echo "<script>aleert('La date d'année doit être au format YYYY.')</script>" ;
            }

            // Vérifier que le prix est un nombre
            if (!is_numeric($price)) {
               echo "<script>alert('prix doit être un nombre.')</script>";
            }
        }

        
        return require "views/admin/cars_regis.view.php";
    }


    public function readAll(){
        $carsData = CarsManager::getAll();

        $cars = [];

        foreach ($carsData as $carData) {

            $car = new Cars(
                    $carData['brand'],
                    $carData['model'],  // Assuming modele is the same as model
                    $carData['annee'],
                    $carData['immatriculation'],
                    $carData['couleur'],
                    $carData['transmission'],
                    $carData['category'],
                    $carData['engin'],
                    $carData['price'],
                    $carData['description']
                );
            $cars[] = $car;
        }

       return $cars;
    }

    public function readAllAdmin(){
        $cars = $this->readAll();
        return require "views/admin/cars_list.view.php";
    }

    public function readAllCustomer(){
        $cars = $this->readAll();
        return require "views/cars/cars_lists.php";
    }



}