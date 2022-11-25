<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifestationController extends AbstractController
{
    #[Route('/manifestation', name: 'app_manifestation')]
    public function index(): Response
    {
        return $this->render('manifestation/index.html.twig', [
            'controller_name' => 'ManifestationController',
        ]);
    }
}
