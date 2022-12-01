<?php

namespace App\Controller;

use App\Entity\Manif;
use App\Form\ManifType;
use App\Form\SearchType;
use App\Repository\ManifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/manif')]
class ManifController extends AbstractController
{
    #[Route('/', name: 'app_manif_index')]
    public function index(ManifRepository $manifRepository, Request $request): Response
    {
        $SearchForm = $this->createForm(SearchType::class);
        $SearchForm->handleRequest($request);

        if($SearchForm->isSubmitted()&& $SearchForm->isValid()){
            $dataform = $SearchForm->getData();

            $manifForm = $manifRepository->searchManif($dataform->getSalle()->getNom());


            return $this->render('manif/index.html.twig', [
                'manifs' => $manifForm,
                'form' => $SearchForm->createView(),
            ]);

        }

        return $this->render('manif/index.html.twig', [
            'manifs' => $manifRepository->findAll(),
            'form' => $SearchForm->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_manif_detail', methods: ['GET'])]
    public function afficherManif(ManifRepository $manifRepository, $id): Response
    {
        return $this->render('manif/detail.html.twig', [
            'manif' => $manifRepository->find($id),
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
