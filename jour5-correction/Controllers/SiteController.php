<?php 

class SiteController extends AbstractController{

    public function connexion() :void {
        $this->render("connexion");
    }

    public function home() :void {
        $this->render("home");

    }

    public function services() :void {
        $this->render("services");
    }

    

}