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
                header('Location:cars');
            }

            // Vérifier que la date d'année est valide
            if (!preg_match("/\d{4}/", $an)) {
               echo "<script>aleert('La date d'année doit être au format YYYY.')</script>" ;
            }

            // Vérifier que le prix est un nombre
            if (!is_numeric($price) and !empty($price)) {
               echo "<script>alert('prix doit être un nombre.')</script>";
            }
        }

        
        // return require "views/admin/cars_regis.view.php";
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
                $car->setId($carData['id']);
            $cars[] = $car;
        }

       return $cars;
    }

    public function readAllAdmin(){
        // echo session_id();
        $this->create();
        // $cars = $this->readAll();
        return require "views/admin/cars_list.view.php";
    }

    public function readAllCustomer(){
        $cars = $this->readAll();
        return require "views/cars/cars_lists.php";
    }


    public function getById($id){
        $car = CarsManager::getById($id);


        // $carObject = new Cars(
        //     $car["brand"],
        //     $car["model"],
        //     $car["annee"],
        //     $car["immatriculation"],
        //     $car["couleur"],
        //     $car["transmission"],
        //     $car["category"],
        //     $car["engin"],
        //     $car["price"],
        //     $car["description"]
        // );

        $theCars = array(
            "brand" => $car["brand"],
            "model" => $car["model"],
            "annee" => $car["annee"],
            "immatriculation" => $car["immatriculation"],
            "couleur" => $car["couleur"],
            "transmission" => $car["transmission"],
            "category" => $car["category"],
            "engin" => $car["engin"],
            "price" => $car["price"],
            "description" => $car["description"]
        );

        // $carArray = get_object_vars($carObject);

        // echo json_encode($carArray);

        echo json_encode($theCars, JSON_PRETTY_PRINT);
        
    }


    public function update(){
        // Démarrer la session (si nécessaire)

        // var_dump($_POST);
        // Vérifiez si le formulaire a été soumis
        if (isset($_POST['submit'])) {

            // Récupérer les données du formulaire
            $brand = $_POST['brand'];
            $modele = $_POST['model'];
            $an = $_POST['year'];
            $immatri = $_POST['immatriculation'];
            $couleur = $_POST['couleur'];
            $transmission = $_POST['transmission'];
            $category = $_POST['category'];
            $engin = $_POST['engin'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            // Créer un instance de l'objet Car
            $car = new Cars($brand, $modele, $an, $immatri, $couleur, $transmission, $category,
                $engin,
                $price,
                $description
            );

            $car->setId(intval($_POST['id']));

            var_dump($car);

            if(CarsManager::update($car)){
                echo "Mise a jour reussi";
            }
            // Traiter l'objet $car comme vous le souhaitez (par exemple, l'enregistrer dans une base de données)
            header("Location: cars"); // Changer "index.php" par le nom de votre fichier de formulaire
          
        } else {
            // Redirection vers le formulaire si ce n'est pas un POST
            header("Location: index.php"); // Changer "index.php" par le nom de votre fichier de formulaire
            exit();
        }
    }

    public function delete($theId){
        CarsManager::delete($theId);
    }

}