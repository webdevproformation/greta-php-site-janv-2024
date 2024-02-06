<?php 

namespace App\Controller ;

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
}