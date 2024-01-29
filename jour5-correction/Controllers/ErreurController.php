<?php 

class ErreurController extends AbstractController{

    public function erreur404() :void {
        $this->render("404");
    }
}