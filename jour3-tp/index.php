<?php 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"] ;
}else {
    $page = "home"; 
}

require_once __DIR__ . "/Controllers/PageController.php";

if($page === "home"){
    $p = new PageController();
    $p->$page(); 
}else if($page === "presentation"){
    $p = new PageController();
    $p->$page(); 
}else if($page === "contact"){
    $p = new PageController();
    $p->$page(); 
}

// dans le dossier Vues
// créer 5 fichiers 
// header.tpl.php
// footer.tpl.php
// home.tpl.php
// contact.tpl.php
// presentation.tpl.php
// xxxx.tpl.php => template fichier contient du html