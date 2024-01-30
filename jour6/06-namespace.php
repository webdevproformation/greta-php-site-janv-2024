<?php 
require_once __DIR__ . "/Bonjour.php";
require_once __DIR__ . "/Test.php";
use App\Librairie\Documentation\Fix\Test;
use App\Bonjour ;
//$b = new App\Bonjour();
$b = new Bonjour();
// namespace\class
// Full Qualified Name Usage
// si j'ai ajouté un namespace au début de mon fichier qui contient le code ma class
// je dois ajouter le App\ nom de la class 
$b->dire(); 
//$t = new App\Librairie\Documentation\Fix\Test();
$t = new Test();
$t->exec(); 

// http://192.168.15.22/jour6/06-namespace.php