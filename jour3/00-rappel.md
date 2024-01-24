# lancer la machine virtuelle

## rappels 

## fonction en plus du langage PHP

- require_once "fichier.php" => permet de copier le contenu d'un fichier fichier.php dans le fichier contient le require_once
- permet d'écrire du code à 1 seul endroit 

## en PHP il existe 4 manières d'exécuter une fonction 

function a(){}

a(); // classique et commun sur tous les langages informatiques

$toto = 'a';
$toto(); // variable qui contient une string que j'exécute

call_user_func("a"); // fonction du langage PHP

call_user_func_array("a"); // fonction du langage PHP

### POO 

- propriété ou méthode public => accéder DANS la class ($this) ou HORS de la class (via objet)
- propriété ou méthode private => accéder QUE DANS la class ($this)
- si la propriété ou la méthode est private => il faut associer avec des méthodes public 
- private c'est une sécurité / manière d'utiliser le code => car les propriétés private sont protégées => encapsuler / emballer 
- ajouter des getter et des setter public dans la class => permettre d'accéder à la propriété private 
- si vous créez une class qui a le même nombre de propriétés que une table dans votre base de données => Active Record 

- héritage 
- créer une class Parent => propriétés / méthode communes 
- class Enfant qui vont hérités de la class parent 
- via le mot clé extends
- très utilisé lorsque l'on constate que l'on du code qui est répété entre plusieurs class 

## premier site

- organisation du code de notre premier site 
- pas de base de données pour le premier site web
- MVC (Model Vue Controller) => principe d'organisation du votre code


