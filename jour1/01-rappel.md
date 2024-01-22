# rappeler moi ce que l'on a vu Jeudi ensemble ???

## méthode magique

```php
class A{
    // méthode magique 
    // méthode qui est exécuter automatiquement lorsque l'on crée un objet depuis cette class
    public function __construct(){
    
    }
}

$a = new A() ; 
```

## constante magique

```
__DIR__  // => constante magique 
```

## UPDATE 

- l'opération qui nécessite le plus de code 
- 3 étapes 
    0. connexion à la base de données
    1. récupérer la ligne de l'on veut UPDATE dans la base => SELECT
    2. remplir un formulaire avec ces données contenant un champ masqué <input type="hidden" name="id"  value="">
    3. laisse l'utilisateur modifier le formulaire
    4. et il soumet son formulaire via la méthode $_POST
    5. vérifier si le formulaire est soumis if(!empty($_POST)){}
    6. récupérer chaque champ du formulaire que l'on va veiller à échapper les ' via la fonction htmlentities()
        1. $nom = htmlentities($_POST["nom"])
        2. $age = htmlentities($_POST["age"])
        3. $commentaire = htmlentities($_POST["commentaire"])
        4. $id = htmlentities($_POST["id"])
    7. $sql = requête UPDATE dans laquelle on concaténer
    8. $connexion->exec($sql);
    9. si tout va bien => message de confirmation que tout s'est bien passé !!

