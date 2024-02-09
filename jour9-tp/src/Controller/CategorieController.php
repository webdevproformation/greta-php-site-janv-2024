<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/categorie')]
class CategorieController extends AbstractController
{
    // http://192.168.15.22/jour9-tp/categorie/
    #[Route('/', name: 'index_categorie')]
    public function index( CategorieRepository  $categorieRepository ): Response
    {
        $categories = $categorieRepository->findAll();
        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    // http://192.168.15.22/jour9-tp/categorie/new
    #[Route(path : "/new", name: "new_categorie")]
    public function exo6(Request $request , EntityManagerInterface $em){
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class , $categorie);

        $form->handleRequest($request); //  $_POST

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("index_categorie");
        }

        return $this->render("categorie/new.html.twig", [ "form" => $form ]);
    }
}
