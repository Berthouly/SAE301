<?php

namespace App\Controller;

use App\Repository\ManifRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index() : Response
    {

        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',

        ]);
    }


    #[Route('/panier/add/{id}', name: 'app_panier_add')]
    public function add(){


        return $this->redirectToRoute('app_panier');


    }


#[Route('/panier/remove/{id}', name: 'app_panier_remove')]
public function remove()
{


    return $this->redirectToRoute('app_panier');
}

}
