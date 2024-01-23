<?php  

// créer deux fichiers 
// 04-lib.php
// 04-index.php 

echo __DIR__ ; // donner le path du dossier qui contient le fichier .php executé 

require_once __DIR__ ."/04-lib.php"; // copier coller tout le code stocker dans le fichier 04-lib.php qui est dans le même dossier que 04-index.php 

echo genererTitre("titre principal de la page"); 

echo genererArticle("article 1", "Victor Hugo"); 
echo genererArticle("article 2", "George Sand"); 

// il faut executer le fichier 04-index.php / PAS le fichier 04-lib.php
// // http://192.168.15.22/jour2/04-index.php


// require // copier coller le contenu d'un autre fichier et erreur fatal si le fichier existe pas
// include // copier coller le contenu d'un autre fichier et warning si le fichier n'existe pas
// require_once xxxxxxx // copier coller le contenu d'un autre fichier et erreur fatal si le fichier existe pas ET si le fichier appelé est plusieurs fois copier coller le premier require_once est pris compte 
// include_once // copier coller le contenu d'un autre fichier et warning si le fichier n'existe pas ET si le fichier appelé est plusieurs fois copier coller le premier include_once est pris compte 

// en même temps que l'on utilise la fonction require_once aussi utilisé 
// constante magique 



