# en utilisant Doctrine et les lignes de commande

créer une nouvelle table etudiant

cette table contient les colonnes suivantes  :

- id clé primaire 
- prenom text maximum de 100 lettres not null
- nom text maximum de 100 lettres not null
- description text maximum de 65000 lettres il peut être null 

créer une entite => 
vagrant ssh 
cd /var/www/html/jour9-tp
php bin/console make:entity 

Class name of the entity to create or update
Etudiant

Symfony UX turbo => no (nouveau)

 created: src/Entity/Etudiant.php
 created: src/Repository/EtudiantRepository.php

Entite est créée et elle ne contient QUE un seul champ de la table id 

prenom

si on n'a fait une erreur => comment la traiter !

fichier PHP => CREATE table === migration 

php bin/console make:migration 

exécuter la requête de création de table dans notre bdd mysql 

php bin/console doctrine:migrations:migrate
php bin/console d:m:m

phpmyadmin INSERER deux lignes dans la table 

créer une méthode => exo4 dans le controller ExoController
utiliser le Repository de Etudiant pour récupérer tous les lignes de la table 
afficher dans une vue exo/exo4.html.twig l'ensemble des informations des etudiants


http://192.168.15.22/phpmyadmin

http://192.168.15.22/jour9-tp/exo2