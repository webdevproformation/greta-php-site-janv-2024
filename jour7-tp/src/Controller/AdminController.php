<?php 
namespace App\Controller;
use App\Model\Article;

class AdminController  extends AbstractController{
    public function article_new(){
        $erreur = []; 
        $articleModel = new Article();
        if(!empty($_POST)){
            // fonction sanitize => enlever les caractères injections 
            $titre = htmlspecialchars(trim($_POST["titre"]));
            $contenu = htmlspecialchars(trim($_POST["contenu"]));
            $img = filter_input(INPUT_POST , "img", FILTER_SANITIZE_URL ); 

            if(strlen($titre ) < 3 || strlen($titre) > 255){
                $erreur[] = "le titre doit contenir entre 3 et 255 lettres";
            }

            if(strlen($contenu ) < 3 || strlen($contenu) > 65000){
                $erreur[] = "le contenu doit contenir entre 3 et 65000 lettres";
            }   


            if($img !== "" && !filter_var($img, FILTER_VALIDATE_URL)){
                    $erreur[] = "url de l'image n'est pas valide";
            }
            
            $articleModel->setTitre($titre)
                         ->setContenu($contenu)
                         ->setImg($img === "" ? null : $img  ); 
            if(empty($erreur)){
                $articleModel->create();
                global $router ;
                // permet d'être redirigé vers la page d'accueil 
                // redirection http 
                header("Location:". $router->generate("home"));
            }
        }
        $data = [];
        $data["h1"] = "créer un nouvel article";
        $data["title"] = "créer un nouvel article";
        $data["erreur"] = $erreur;
        $data["article"] = $articleModel ; 
        $this->render("article_new", $data); 
    }
} 