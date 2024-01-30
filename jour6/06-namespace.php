<?php 

require_once __DIR__ . "/Bonjour.php";

$b = new App\Bonjour();
// namespace\class
// Full Qualified Name Usage
// si j'ai ajouté un namespace au début de mon fichier qui contient le code ma class
// je dois ajouter le App\ nom de la class 
$b->dire(); 

// http://192.168.15.22/jour6/06-namespace.php