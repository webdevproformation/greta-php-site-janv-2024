<?php 

require_once __DIR__ . "/vendor/autoload.php"; 

$router = new AltoRouter(); 

$router->map("GET", "/", [
    "class" => "\App\SiteController",
    "method" => "home"
] , "home");

// $router objet 
// qui contient une méthode map()
// qui prend 4 paramètres
// 1 méthode GET / POST
// 2 uri
// uri de la route / => home
// uri de la route /connexion => connexion
// uri de la route /article/:id => article 
// 3 tableau associatif => 3 clés => class à exécuter / méthode
// 4 string => nommer la route => dans les templates dans les balises a
