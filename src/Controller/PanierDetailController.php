<?php

namespace App\Controller;

use App\Entity\PanierDetail;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PanierDetailController extends AbstractController
{
    #[Route('/panier/detail', name: 'app_panier_detail')]
    public function panierValidation(Request $request, EntityManagerInterface $entityManager): Response
    {


        return $this->render('panier_detail/Validation.html.twig', [

            'controller_name' => 'PanierDetailController',
        ]);
    }

}
