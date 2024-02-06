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
