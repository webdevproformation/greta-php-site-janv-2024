<?php 

namespace App\Controller ;

use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $data["articles"] = $articlesRepository->findAll(); // SELECT * FROM article  
        return $this->render("front/articles.html.twig" , $data); 
    }

    #[Route(path : "/new_etudiant" , name:"new_etudiant")]
    public function new_etudiant( Request $request , EntityManagerInterface $em ){
        // dd($request); 
        $data = [];
        $etudiant = new Etudiant(); // etudiant vide 
        $form = $this->createForm(EtudiantType::class, $etudiant); 
        // créer le formulaire
        $data["form"] = $form ; // que l'on va envoyer à la vue 
        $form->handleRequest($request) ; // récupérer le $_POST ET remplir l'entité 
        if($form->isSubmitted() && $form->isValid()){ 
            // if(!empty($_POST) && tous les tests)
            // INSERT 
            
            $em->persist($etudiant); // si id === null => INSERT id === 1 => UPDATE
            $em->flush(); 
            return $this->redirectToRoute("exo4"); // redirection vers la page exo4 
        }
        return $this->render("front/new_etudiant.html.twig" , $data); 
    }

}