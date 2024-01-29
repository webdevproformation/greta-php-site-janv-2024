<?php 

// http://192.168.15.22/jour5-correction/
echo __DIR__ ; //  /var/www/html/jour5-correction
               // quand tu appelles un fichier 
               // dans un autre il ya deux méthodes
               // appel via son chemin absolu => __DIR__ permet d'avoir le chemin absolu
               // appel via son chemin relatif 
               // chemin relatif 


require_once __DIR__ . "/Controllers/SiteController.php";
// require_once /var/www/html/jour5-correction/Controllers/SiteController.php
// le chemin absolu  par rapport au dossier racine dans la machine virtuelle

require_once "Controllers/SiteController.php";
// require_once "Controllers/SiteController.php";
// chemin relatif au fichier qui l'exécute