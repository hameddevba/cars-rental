<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Suppression de la partie de la requête après le point d'interrogation (si présente)
$request_uri = strtok($request_uri, '?');

// Séparation de l'URL en segments
$segments = explode('/', trim($request_uri, '/'));
// var_dump($segments);

// if(empty($segments[0])){
//     // Si aucun segment n'est spécifié on redirige vers la page d'accueil
//     require "views/cars/cars_lists.php";
// }elseif($segments[0] == 'cars'and empty($segments[1])){
//     require "views/cars/reservation.php";
// }elseif($segments[0]== 'cars'){
//     if(!empty($segments[1]) && is_numeric($segments[1])){
//         echo "Hello C Ba Mohamed";
//     }
// }

require "controllers/carsController.php";

$controller = new CarsController();

switch($segments[0]){
    // case "": require "views/cars/cars_lists.php";
    //     break;
    case "":
        $controller->index();
        break;
    
 case "data":
        $controller->create();
        break;

    case  "cars" :
        if(empty($segments[1])){
            require "views/cars/reservation.php";
        }elseif(is_numeric($segments[1])){
            echo "C Ba Mohamed tous marche";
        };
        break;

    case "admin" :
        if (empty($segments[1])) require "views/admin/dashboard.php";
        elseif($segments[1]=='add_cars') $controller->create();
        elseif ($segments[1]=="cars_list") $controller->read();
        break;
        
    default:
        break;
}

// Vérification du premier segment (doit être "articles")
// if (!empty($segments[0]) && $segments[0] == 'articles') {
//     // require "views/cars/reservation.php";
//     // Vérification et extraction de l'ID de l'article
//     if (!empty($segments[1]) && is_numeric($segments[1])) {
//         $article_id = $segments[1];

//         echo "ID de l'article : $article_id";

//     } else {
//         echo "Erreur : ID de l'article non spécifié ou invalide.";
//     }
// } else {
//     echo "Erreur : URL non valide.";
// }

?>