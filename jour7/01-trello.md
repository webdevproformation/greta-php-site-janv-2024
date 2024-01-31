# checklist => backlog 

sujet site internet => blog => news 

- [xx] demarrer la machine virtuelle
    - http://192.168.15.22
    - http://192.168.15.22/phpmyadmin
    - vagrant ssh
- [xx] créer la structure de notre projet 
    - index.php
    - .htaccess
    - Controllers
    - Vues

    - index.php
    - .htaccess
    - composer.json
    - composer.lock
    - .gitignore
    - src/    => app  / core 
        - Controller/
        - Vues/
        - Model/
        - Utils/
        - param.ini
    - vendor

- [] router 
    - if ??? $_GET["page"] existe 
    - tableau liste des pages
    - est ceque la page est dans le tableau
    - exécuter la class SiteController 
    - exécuter la méthode associée
    - sinon erreur 404 
    
    => installer une librairie qui va réalisé l'ensemble de cette logique 
    => AltoRouter
    => https://packagist.org/packages/altorouter/altorouter
    => https://dannyvankooten.github.io/AltoRouter/
    
    cd /var/www/html/jour7-tp
    composer require altorouter/altorouter
    
    => veuillez vous connecter à votre machine virtuelle 
    => positionner dans le dossier jour7-tp
    => installer la librairie AltoRouter

- [] page d'accueil 
- [] page article 
- [] page de connexion
- [] espace de gestion des articles
- [] espace de gestion des gestionnaires 
- [] base de données contenant 2 tables
- [] table articles
- [] table users 