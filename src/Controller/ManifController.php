<?php

namespace App\Controller;

use App\Entity\Manif;
use App\Form\ManifType;
use App\Repository\ManifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/manif')]
class ManifController extends AbstractController
{
    #[Route('/', name: 'app_manif_index', methods: ['GET'])]
    public function index(ManifRepository $manifRepository): Response
    {
        return $this->render('manif/index.html.twig', [
            'manifs' => $manifRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_manif_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ManifRepository $manifRepository): Response
    {
        $manif = new Manif();
        $form = $this->createForm(ManifType::class, $manif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manifRepository->save($manif, true);

            return $this->redirectToRoute('app_manif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('manif/new.html.twig', [
            'manif' => $manif,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_manif_show', methods: ['GET'])]
    public function show(Manif $manif): Response
    {
        return $this->render('manif/show.html.twig', [
            'manif' => $manif,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_manif_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Manif $manif, ManifRepository $manifRepository): Response
    {
        $form = $this->createForm(ManifType::class, $manif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manifRepository->save($manif, true);

            return $this->redirectToRoute('app_manif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('manif/edit.html.twig', [
            'manif' => $manif,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_manif_delete', methods: ['POST'])]
    public function delete(Request $request, Manif $manif, ManifRepository $manifRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$manif->getId(), $request->request->get('_token'))) {
            $manifRepository->remove($manif, true);
        }

        return $this->redirectToRoute('app_manif_index', [], Response::HTTP_SEE_OTHER);
    }
}
