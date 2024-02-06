<?php 

namespace App\Controller ;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    #[Route("/", name:'home')]
    public function home(){
        $data = [];
       /*  var_dump("bonjour");
        die();  */
        dd("bonjour"); 
        $this->render("front/home.html.twig", $data);
    }

    // uri  /description
    // nom de la route : premiere-page
    #[Route("/description", name:"premiere-page")]
    public function description(){
        $data["h1"] = "voici le titre de la page" ; 
        return $this->render("front/description.html.twig" , $data); 
        // dans templates
        // créer un dossier front 
        // dans ce dossier créer un fichier 
        // dont l'extension est .html.twig
    }

    #[Route(path : "/boucle-condition" , name : "boucle-condition")]
    public function boucleCondition(){
        $data = [
            "fleurs" => [
                [ "nom" => "rose" , "prix" => 20 , "isEnStock" => true  ],
                [ "nom" => "jasmin" , "prix" => 10 , "isEnStock" => true  ],
                [ "nom" => "lilas" , "prix" => 15 , "isEnStock" => false  ],
                [ "nom" => "tulipes" , "prix" => 30 , "isEnStock" => false  ],
            ]
        ];
        return $this->render("front/boucle-condition.html.twig", $data); 
    }

    #[Route(path : "/articles" , name:"articles")]
    public function articles( ArticleRepository $articlesRepository ){
        $data["articles"] = $articlesRepository->findAll();  
        return $this->render("front/articles.html.twig" , $data); 
    }

}