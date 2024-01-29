<?php 

require_once __DIR__ . "/Bdd.php";
require_once __DIR__ . "/Categorie.php";

$categorieModel = new Categorie(); // Active Record
$nbLigne = $categorieModel
                ->setNom("première catégorie")
                ->setDescription("un lorem ipsum")
                ->create(); 

echo $nbLigne ; 

$categorieModel
                ->setNom("PHP")
                ->setDescription("découverte du langage PHP")
                ->create(); 

// http://192.168.15.22/jour5/03-nouveau.php

// créer une nouvelle table dans la base 
// article 
// id  clé primaire
// titre  texte max de 255 caractères not null
// contenu texte maximum de 45 000 caractères 
// dt_creation DATEet heure par défaut la valeur de maintenant

// créer une class Article 
// autant de propriété que de colonne dans la table article
// créer les setter et getter
// créer une méthode create qui permet de faire un INSERT dans la table article 