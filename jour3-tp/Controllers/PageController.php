<?php 
// créer le fichier PageController.php
// class contient du code qui est exécuté AVANT 
// la partie affichage
class PageController {
    // méthode que l'on va exécuter dans le fichier index.php 
    // $p = new PageController()
    // $p->home(); 
    public function home() :void {
        $this->render("home");
    }
    public function presentation() :void{
        $this->render("presentation");
    }
    public function contact() :void{
        // avant le render => stocker toutes les valeurs 
        // dont j'ai besoin ici 
        $data = [] ; 
        $data["title"] = "page nous contacter";
        $data["h1"] = "Vous avez une question ? Nous avons une réponse !!"; 

        $this->render("contact", $data);
    }
    // méthode que l'on va utiliser UNIQUEMENT dans la class 
    // rendre appeler les bons fichiers de vue en fonction de la page concernée
    private function render(string $page , array $data = [] ) :void{
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$page.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }

}
