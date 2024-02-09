<?php 
namespace App\Controller ;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\EtudiantRepository;
use App\Entity\Categorie;
use App\Form\CategorieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Exo1Controller extends AbstractController{
    #[Route("/exo1",name:"exo1" )]
    public function test(){
        // http://192.168.15.22/jour9-tp/exo1
        dd("j'ai réussi l'exo 1");
    }

    #[Route(path : "/exo2" , name:"exo2")]
    public function exo2(){
        $data = [
            "h1" => "exo2" , 
            "prenom" => "Alain",
            "nom" => "Doe",
            "age" => 22
        ];
        return $this->render("exo/vue.html.twig" , $data); 
    }

    #[Route(path : "/exo3" , name:"exo3")]
    public function exo3(){
        $data = [
            "etudiants" => ["Alain", "Pierre", "Céline"],
            "formations" => ["JS", "PHP" , "Angular", "Symfony"]
        ];
        return $this->render("exo/exo3.html.twig" , $data); 
    }

    #[Route(path : "/exo4" , name:"exo4")]
    public function exo4( EtudiantRepository $etudiantRepo ){
        $data["etudiants"] = $etudiantRepo->findAll(); 
        return $this->render("exo/exo4.html.twig" , $data); 
    }

    #[Route(path : "/exo5" , name : "exo5")]
    public function exo5(Request $request , EntityManagerInterface $em){

        $article = new Article(); 
        $form = $this->createForm(ArticleType::class , $article); 

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($article);
            $em->flush(); 

            return $this->redirectToRoute("articles");
            // Entity => propriété + setter + getter
            // Repository => SELECT 
            // EntityManagerInterface UPDATE / DELETE / INSERT 
        }

        return $this->render("exo/exo5.html.twig", [ "form" => $form ]);

    }

    #[Route(path : "/exo6", name: "exo6")]
    public function exo6(Request $request , EntityManagerInterface $em){
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class , $categorie);

        $form->handleRequest($request); //  $_POST

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("exo6");
        }

        return $this->render("exo/exo6.html.twig", [ "form" => $form ]);
    }
}