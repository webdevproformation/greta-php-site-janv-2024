<?php 

$page = "";

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"] ;
}else {
    $page = "home"; 
}

if($page === "home"){
    // afficher la page home // http://192.168.15.22/jour3-tp
    echo "afficher home"; 
}else if($page === "presentation"){
    // afficher la page présentation
    echo "afficher présentation"; // http://192.168.15.22/jour3-tp/index.php?page=presentation
}else if($page === "contact"){
    echo "afficher contact"; // http://192.168.15.22/jour3-tp/index.php?page=contact
    // afficher la page de contact
}
