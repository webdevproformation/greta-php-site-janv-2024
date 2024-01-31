<?php 

namespace App\Controller ;

use App\Model\Article;

class SiteController{

    public function home() :void {
        $data = [];
        $articleModel =  new Article();
        $data["articles"] = $articleModel->readAll();
        $data["h1"] = "Nos derniers articles à lire";
        $data["title"] = "page d'accueil";

        var_dump($data); 

        $this->render("home");
    }

    private function render(string $template):void{
        global $router ; // va récupérer la variable $router qui a été créée dans le contexte global 
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$template.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }

}