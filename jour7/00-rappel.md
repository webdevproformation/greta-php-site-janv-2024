## amélioré la class qui permet de se connecter à la bdd 

try{
    // traitement
    // sortie les identifiants de connexion à la base dans un fichier .ini
    // ainsi on stocke les informations sensibles dans un fichier à part
    $params = parse_ini_file(__DIR__. "/fichier.ini"); 
    // tableau associatif 
}catch(Exception $e){
    // si le traitement échoue remplacer le message orange 
    die(); 
}

## injection SQL 

- le fait de réussir à inclure du code dans le code source de la page 
- pour bloquer les injections SQL on utilise les requêtes préparées

$connexion = ....

$sql = "SELECT * FROM table WHERE id = $id" => INJECTION 
$stmt = $connexion->query($sql);
$data = $stmt->fetch(); 

$sql = "SELECT * FROM table WHERE id = :id" => INJECTION bloquée
$stmt = $connexion->prepare($sql);
$stmt->execute([ ":id" => $id ]); 
$data = $stmt->fetch(); 

=> https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/

## composer

- gestionnaire de dépendance
- télécharger des librairies (packagist.org)
- si la librairie a des dépendances => les télécharger aussi 
- dans le monde de javascript => équivalent de npm
- c'est un outil en ligne de commande qu'il faut installer (vagrant ssh)
- attention il faut executer cette commande dans un dossier bien particulier (cd /var/www/html/jour6)

composer require créateur_librairie/nom_librairie

composer require nesbot/carbon
composer require symfony/yaml

- require_once __DIR__ . "/vendor/autoload.php"


## namespace 

- lorsque l'on télécharge des librairies, il y a de fortes chances que vous aillez deux fois le même nom de class 
- les créateurs de PHP se sont inspirés de C++ 

- à partir de maintenant => lorsque je crée une class => ajouter avant `namespace` 
- la classe est cachée dans un dossier qui a le nom du namespace 
- et d'éviter d'avoir deux noms de class identiques

MAIS pour utiliser la class dans un autre fichier  

require_once __DIR__ . "/Class.php"

technique 1
$objet = new NAMESPACE\Class();

technique 2
use NAMESPACE\Class ;

$objet = new Class();

## fichier .yaml

- format de fichier 
- dans lequel vous allez stocker des informations 
- .json / .xml / .ini 
- tabulation

```yaml
clé:
    sous-clé: votre texte
    autre: 10
    verif: true 
    liste:
        - elément 1
        - elément 2
        - élement 3
    fleurs: [jasmin , tulipe , rose]
```

```php
$data = [
    "clé" => [
        "sous-clé" => "votre texte",
        "autre"    => 10 ,
        "verif"    => true ,
        "liste"   => ["elément 1" , "elément 2" , 'élement 3'],
        "fleurs"  => ["jasmin" , "tulipe" , "rose"]
    ]
];
```

- créer un deuxième site internet 
- intégrant une base de données => M 