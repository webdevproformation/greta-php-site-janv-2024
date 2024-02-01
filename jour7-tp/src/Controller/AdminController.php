<?php 
namespace App\Controller;
class AdminController  extends AbstractController{
    public function article_new(){
        $data = [];
        $data["h1"] = "créer un nouvel article";
        $data["title"] = "créer un nouvel article";
        $this->render("article_new", $data); 
    }
}