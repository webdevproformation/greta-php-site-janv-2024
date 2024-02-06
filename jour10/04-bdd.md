# Model FC VC

FC => public/index.php 
#[Route(path: "/uri" , name: "nom_route")]

Controller 
    dossier src/Controller 
        class qui contiennent des méthodes 
        $tableauAssociatif
        return $this->render("", $tableauAssociatif)

templates
    base.html.twig => header / footer
    coeur.html.twig => {% extends "base.html.twig" %}
    _menu.html.twig => incorporer une partie de la page

# Model 

- [x] créer une base 
- [x] créer notre table avec ses colonnes
- [x] connexion 
- [x] param.ini 
- [x] Model => class Table 
    - propriété privée = autre que de colonnes dans la table
    - setter et getter 
    - méthode pour le CRUD 

Tous ces concepts que nous avons vus ensemble sont présents dans Symfony  

- param.ini => .env 
DATABASE_URL="mysql://root:demo@127.0.0.1:3306/demo-symfony?serverVersion=8.0.32&charset=utf8mb4"

```bash
vagrant ssh
cd /var/www/html/jour9-tp
php bin/console doctrine:database:create
# Created database `demo-symfony` for connection named default
```

connexion => pas besoin de s'embêter => Symfony le fait pour nous 

créer des modèles et à partir de ces modèles nous allons pouvoir créer les tables 
Entity 

créer une table article 
id clé primaire
titre  text avec un maximum de 255 NOT NULL
contenu  text maximum de 65000 lettres 

vagrant ssh
cd /var/www/html/jour9-tp
php bin/console make:entity Article

ajouter un champ 
titre
type [string] Enter 
nb max caractère [255] Enter
isNull [no] Enter

ajouter un champ 
contenu Enter 
type [string] 
text Enter
isNull [no] 
yes Enter

Enter => dans le dossier src/Entity/Article.php 

# créer la table 

```
php bin/console make:migration 
php bin/console doctrine:migrations:migrate
```
