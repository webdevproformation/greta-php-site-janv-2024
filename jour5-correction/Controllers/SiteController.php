<?php 

class SiteController{

    public function connexion(){
        $this->render("connexion");
    }

    public function home(){
        $this->render("home");

    }

    public function services(){
        $this->render("services");
    }

    private function render($nomTemplate){
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$nomTemplate.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }

}