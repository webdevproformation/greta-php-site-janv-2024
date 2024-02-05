<?php 
namespace App\Controller ;
use App\Model\Article;
class SiteController extends AbstractController{
    public function home() :void {
        $data = [];
        $articleModel =  new Article();
        $data["articles"] = $articleModel->readAll();
        $data["h1"] = "Nos derniers articles à lire";
        $data["title"] = "page d'accueil";
        $this->render("home" , $data);
    }

    public function login() :void{
        $data = [];
        $data["h1"] = "Accéder au back office du site";
        $this->render("login" , $data);
    }
}