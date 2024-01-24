<?php 

class ErreurController{

    public function erreur404(){
        $data = [];
        $data["title"] = "page introuvable";
        $data["h1"] = "Erreur 404, page introuvable";
        $this->render("404", $data);
    }

    private function render(string $page , array $data = [] ) :void{
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$page.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }

}