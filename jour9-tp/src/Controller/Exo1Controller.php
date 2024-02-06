<?php 
namespace App\Controller ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class Exo1Controller extends AbstractController{
    #[Route("/exo1",name:"exo1" )]
    public function test(){
        // http://192.168.15.22/jour9-tp/exo1
        dd("j'ai réussi l'exo 1");
    }

    #[Route(path : "/exo2" , name:"exo2")]
    public function exo2(){
        $data = [
            "prenom" => "Alain",
            "nom" => "Doe",
            "age" => 22
        ];
        return $this->render("exo/vue.html.twig" , $data); 
    }
}