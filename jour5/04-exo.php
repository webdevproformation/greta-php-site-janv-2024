<?php 

require_once __DIR__ . "/Bdd.php";
require_once __DIR__ . "/Article.php";

$articleModel = new Article();

$articleModel->setTitre("premier article")
             ->setContenu("lorem ipsum"); 

$nbLigne = $articleModel->create(); 

echo $nbLigne ; 

// http://192.168.15.22/jour5/04-exo.php