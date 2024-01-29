<?php  

// le point d'entrée unique de notre projet 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else {
    $page = "/"; 
}

// maintenant on sait quelle page est demandée par le client
// appeler un controller et ce controller va avoir une méthode qui a le nom de la page a afficher

$routes = [
    "/" => "home",
    "/services" => "services",
    "/connexion" => "connexion"
];

require_once __DIR__ . "/Controllers/AbstractController.php";
require_once __DIR__ . "/Controllers/SiteController.php";
require_once __DIR__ . "/Controllers/ErreurController.php";

if(array_key_exists( $page , $routes)){
    $p = new SiteController();
    $p->{$routes[$page]}();
} else {
    $e = new ErreurController();
    $e->erreur404();
}

 

