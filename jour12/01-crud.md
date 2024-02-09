# organisation 

pour organiser notre code nous allons créer un controller par table 

si dans la base de données j'ai une table Categorie

=> CategorieController => CRUD php bin/console make:controller
=> Categorie => entité => php bin/console make:entity
=> CategorieType => formulaire  php bin/console make:form
=> CategorieRepository => SELECT  php bin/console make:entity
=> dans la dossier template categorie/ .html.twig page ajouter / update / delete  ...


dans le controller CategorieController
vue que l'on veut faire un CRUD => 4 méthodes 
// lister toutes les categories disponibles
// ajouter 
// update
// delete 
