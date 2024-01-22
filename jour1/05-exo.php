<?php 
// http://192.168.15.22/jour1/05-exo.php

$url = "https://localhost/index.php?id=10&sort=DESC/" ;

// supprimer le dernier / dans l'url
$url = trim($url , "/"); 
var_dump($url);
// insérer entre localhost/ et index.php => le texte jour1/
$url = str_replace("localhost/" , "localhost/jour1/" , $url);
var_dump($url);

// remplacer id=10 par identifiant= 10
$url = str_replace("id" , "identifiant" , $url);
var_dump($url);

$url2 = "https://localhost/index.php?id=10&sort=DESC/";

$url2 = trim(str_replace(["localhost/" , "id"] , ["localhost/jour1/", "identifiant"] , $url2) , "/"); 

var_dump($url2);