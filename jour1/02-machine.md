PHP est un langage serveur 
=> exécuter mes scripts j'ai besoin d'avoir un serveur 

1. Vagrant pour créer un serveur 
1. php version 8.2
1. mysql + phpmyadmin 
1. composer => outil en ligne de commande qui permet de télécharger du codes / des projets PHP depuis internet 
    1. télécharger des logiciels => gestionnaire de dépendance 
    1. linux => apt install ...  => télécharger un logiciel pour Linux
    1. PHP   => composer require ... => télécharger du code pour un projet PHP
    1. React => npm install => télécharger du code js  pour un projet react
    1. Python => pip install => télécharger du code python  pour un projet Python

2. présentation du fichier Vagrantfile 
    1. ressemble beaucoup au fichier du module précédent
    1. vous avez une nouvelle section qui permet d'installer composer 
   
3. veuillez créer le fichier Vagrantfile à la racine de votre dossier module7
    1. copier le contenu du lien suivant => https://raw.githubusercontent.com/webdevproformation/greta-php-site-janv-2024/main/Vagrantfile
 

4. une fois la machine installée 
    1. vagrant ssh
    1. sudo su -
    1. echo "\$cfg['SendErrorReports'] = 'never';" >> /etc/phpmyadmin/config.inc.php
    1. la ligne précédente est disponible à la fin du fichier Vagrantfile 

5. lancer un navigateur :
    1. http://192.168.15.22/phpmyadmin
    1. login : root
    1. password : demo