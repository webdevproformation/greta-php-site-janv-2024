# rappel

dans un projet informatique => créer des tables est une tâche récurrent 
dans Symfony vous utilisez des lignes de commande pour faire cette tâche 


1 Créer un fichier qui est une class qui contient autant de propriétés que l'on voudra de colonne dans la table 
+ créer aussi Repository 

```bash
php bin/console make:entity 
```

comparer les Entites avec la base de données et ses tables 
générer un fichier migrations => la différence pour les synchroniser

```bash
php bin/console make:migration 
```

j'ai un fichier de migration qui contient des requetes SQL avec des CREATE TABLE / ALTER TABLE et je veux les exécuter

```bash
php bin/console doctrine:migrations:migrate 
```

##  Entity 
#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class NomTable{

    #[ORM\Column(length: 255)]
    private $prop;
    #[ORM\Column(length: 255)]
    private $prop;
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private $prop;
    private $prop;

setter et getter pour chaque propriété 

}

##  migration 

class Version.............{

    public function description(){}

    public function up(){
        // ici CREATE TABLE 
    }

    public function down(){
        // inverse 
    }

} 

=> table dans la base de données doctrine_migration_version 
historique des exécutions 

----

## CRUD / C et R

Create INSERT 

```php
// dans un Controller
public function page( EntityManagerInterface $em  ){
    $article = new Article();
    $article->setTitre("titre")
            ->setDescription("toto");
    // $article->create();
    $em->persist($article);// stocker en mémoire 
    $em->flush(); // exécution 
}
```

Read All 

```php
// dans un Controller
public function page( ArticleRepository $articleRepo  ){
    $articleRepo->findAll() ; // SELECT * FROM article 
}
```

// dans le projet jour9-tp
// créer une nouvelle table Categorie
// cette table contient 3 colonnes
// nom text maximum 100 de lettres
// description 65000 lettres
// auteur   text maximum 100 de lettres

// créer un page qui permet d'ajouter des catégories via un formulaire 
// page s'appelle exo6
// contient un formulaire avec autant de champ que l'on a de colonne dans la table 
