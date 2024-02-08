https://www.nuxit.com/pack-etudiant/

DORANCO20

----

# rappel => Symfony 



## Base de données et les tables utiliser un terminal

- .env => comme param.ini tableau contient les informations critiques de votre projet 
- notamment les identifiants à la base de données 
- DATABASE_URL="mysql://root:demo@127.0.0.1:3306/demo-symfony?serverVersion=8.0.32&charset=utf8mb4"
- vagrant ssh 
- cd /var/www/html/jour9-tp 
- php bin/console doctrine:database:create # commande qui crée la base de données 
- créer des tables 
- php bin/console make:entity # créer un fichier Entity (rappel les Models)
    - ce fichier est situé dans le dossier src/Entity/Article.php
    - ce fichier ressemble aux Models contient autant de propriété privée que de colonne dans la table à créer ET setter et getter
- php bin/console make:migration # créer un fichier de migration 
    - dans le dossier migration vous avez un fichier > Versionxxxxxxxxxx.php 
    - ce fichier contient des requêtes SQL de création de TABLE / ALTER TABLE 
- php bin/console doctrine:migrations:migrate 
    - exécute le ou les fichiers de migration 


Symfony LA LIBRAIRIE qui permet de travailler avec une base de données Doctrine 
Doctrine est une couche d'abstraction au dessus de PDO 

SELECT Repository

http://192.168.15.22/phpmyadmin

MVC

=> public/index.php 
C => src/Controller/...Controller.php => verifier dans le profiler
M => Entite + Repository => pour accéder aux informations aux BDD
V => render => /templates

