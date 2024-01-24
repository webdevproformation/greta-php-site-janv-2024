<?php 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"] ;
}else {
    $page = "home"; 
}

require_once __DIR__ . "/Controllers/AbstractController.php";
require_once __DIR__ . "/Controllers/PageController.php";
require_once __DIR__ . "/Controllers/ErreurController.php";

$routes = [
    "home" => "home" , 
    "presentation" => "presentation",
    "contact" => "contact"
];

if(isset($routes[$page])){
    $p = new PageController();
    $p->$page(); 
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