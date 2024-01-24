<?php 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"] ;
}else {
    $page = "home"; 
}

if($page === "home"){
    // afficher la page home // http://192.168.15.22/jour3-tp
    // echo "afficher home"; 
    require_once __DIR__ . "/Vues/header.tpl.php";
    require_once __DIR__ . "/Vues/$page.tpl.php";
    require_once __DIR__ . "/Vues/footer.tpl.php";
}else if($page === "presentation"){
    // afficher la page présentation
    //echo "afficher présentation"; 
    // http://192.168.15.22/jour3-tp/index.php?page=presentation
    require_once __DIR__ . "/Vues/header.tpl.php";
    require_once __DIR__ . "/Vues/$page.tpl.php";
    require_once __DIR__ . "/Vues/footer.tpl.php";
}else if($page === "contact"){
    require_once __DIR__ . "/Vues/header.tpl.php";
    require_once __DIR__ . "/Vues/$page.tpl.php";
    require_once __DIR__ . "/Vues/footer.tpl.php";
    // echo "afficher contact"; 
    // http://192.168.15.22/jour3-tp/index.php?page=contact
    // afficher la page de contact
}

// dans le dossier Vues
// créer 5 fichiers 
// header.tpl.php
// footer.tpl.php
// home.tpl.php
// contact.tpl.php
// presentation.tpl.php
// xxxx.tpl.php => template fichier contient du html