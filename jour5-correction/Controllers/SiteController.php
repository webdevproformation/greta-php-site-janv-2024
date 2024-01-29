<?php 

class SiteController extends AbstractController{

    public function connexion() :void {
        require_once __DIR__ . "/../Utils/data.php";
        $data = $baseDeDonnees["connexion"];
        $this->render("connexion" , $data);
    }

    public function home() :void {
        require_once __DIR__ . "/../Utils/data.php";
        $data = $baseDeDonnees["accueil"];
        $this->render("home" , $data);
    }

    public function services() :void {
        require_once __DIR__ . "/../Utils/data.php";
        $data = $baseDeDonnees["services"];
        $this->render("services" , $data);
    }

}