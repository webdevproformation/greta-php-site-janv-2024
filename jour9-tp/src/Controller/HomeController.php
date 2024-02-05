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

}