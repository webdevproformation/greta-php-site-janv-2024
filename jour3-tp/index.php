<?php 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"] ;
}else {
    $page = "/"; 
}

require_once __DIR__ . "/Controllers/AbstractController.php";
require_once __DIR__ . "/Controllers/PageController.php";
require_once __DIR__ . "/Controllers/ErreurController.php";

$routes = [
    "/" => "home" , 
    "/presentation" => "presentation",
    "/contact" => "contact"
];

if(isset($routes[$page])){
    // var_dump($routes[$page]); 
    $p = new PageController();
    $p->{$routes[$page]}(); 
}else{
    $p = new ErreurController();
    $p->erreur404(); 
}



// dans le dossier Vues
// créer 5 fichiers 
// header.tpl.php
// footer.tpl.php
// home.tpl.php
// contact.tpl.php
// presentation.tpl.php
// xxxx.tpl.php => template fichier contient du html


// page de présentation

// http://192.168.15.22/jour3-tp/index.php?page=presentation
// http://192.168.15.22/jour3-tp/presentation

// le serveur va comprendre que je suis en train de lui demander 
// http://192.168.15.22/jour3-tp/index.php?page=presentation

// réécrire d'url 
// fichier de configuration de Apache => .htaccess 