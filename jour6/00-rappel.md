# rappels 

- correction du TP de vendredi MVC => VC 
- Trello => tableau etiquette 
- rappel de git et github via Visual Studio Code 
- vous avez aussi la possibilité de visualiser l'historique des commit en local (sur votre ordinateur)
- gitk
- Model => la partie du code du site internet en relation avec la base de données


- créer une class Bdd 
- une méthode getInstance() statique => cette méthode qui permet de créer une connexion à la base de données
- créer une table qui a 3 colonnes 
- créer une class nom de la table avec 3 propriétés privée
- ajouter setter et getter pour toutes les propriétés
- exception id => getter 
- enfin dans cette class ajouter le CRUD 
- des méthodes => create() => 
    - $connexion = Bdd::getInstance()
    - $sql = "INSERT ..."
    - exécution 

// require => Bdd
// require => Table

$tableModel = new Table() 

$date = date("Y-m-d H:i:s");

$tableModel->setTitre("...")
           ->setContenu("...")
           ->setDateCreation($date);

$tableModel->create(); 

=> améliorer la class BDD
=> sécurité injection SQL 
=> finir le CRUD 
=> composer 