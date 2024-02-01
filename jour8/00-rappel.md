
## organisation du code 

- créer un dossier `src`
- dans ce dossier que le développeur va travailler 90% de son temps
- contient tout le code en charge de notre application
    - controller
    - model
    - vues
    - utilitaire => connexion à la base de données Bdd.php
    - param.ini
- le dossier `vendor` créé par composer
- contient des librairies télécharger depuis internet (packagist.org)
- vagrant ssh 
- cd /var/www/html/jour7-tp
- composer require nesbot/carbon

- .htaccess => point d'entrée de notre application 1 apache
- index.php => point d'entrée de notre application 2 router 
- .gitignore

## Model 

- class prend le nom d'une table dans la base de données
- autant de propriété privée QUE la table a de colonnes
- setter et getter
- méthode du crud 

## ordre exécution

.htaccess
index.php 
SiteController et la méthode connexion
appeler le model User 
appeler la connexion BDD
appeler le model User exécute une méthode du CRUD 
SiteController et la méthode connexion
afficher les fichiers de vues
header.tpl.php
connexion.tpl.php
footer.tpl.php

--

ajouter une nouvelle 