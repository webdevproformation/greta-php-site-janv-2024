<?php 

class ErreurController extends AbstractController{

    public function erreur404(){
        $data = [];
        $data["title"] = "page introuvable";
        $data["h1"] = "Erreur 404, page introuvable";
        $this->render("404", $data);
    }

}