<?php  

// le point d'entrée unique de notre projet 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else {
    $page = "home"; 
}

// maintenant on sait quelle page est demandée par le client
// appeler un controller et ce controller va avoir une méthode qui a le nom de la page a afficher

require_once __DIR__ . "/Controllers/SiteController.php";

$p = new SiteController();
$p->$page(); 

