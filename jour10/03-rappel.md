- public/index.php => point entrée dans le framework
                - router / Kernel 
- Controller 
    - méthode
    - décorée => #[Route(path : "/" , name: "nom route")]
    - return $this->render("dossier/fichier.html.twig")

- dans le dossier templates == Vues 
    - créer un sous dossier "dossier"
        - fichier.html.twig  = home.tpl.php 
            - {% extends "bootstrap.html.twig" %}
            - {% block body%}
                - milieu de page
            - {% endblock %}
    - bootstrap.html.twig => header et footer de la page 

FC + VueController

=> mise en page 
    => ajouter une barre de menu 
    dans le dossier template 
    créer un sous dossier "fragment"
        _menu.html.twig
        le _ signifie element qui est une partie d'une page 


cas pratique 

créer une nouvelle route exo3 dans le controller exo1Controller
ce controller contient une méthode exo3
cette méthode contient un tableau avec les valeurs suivantes 

$data = [
    "etudiants" => ["Alain", "Pierre", "Céline"],
    "formations" => ["JS", "PHP" , "Angular", "Symfony"]
];
cette variable est envoyée à la vue 
la vue qui est disponible dans le dossier templates/exo/exo3.html.twig 

afficher tous les étudiants dans la vue 
afficher toutes les formations dont le nombre de lettre est inférieur à 4 

