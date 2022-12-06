<?php

namespace App\Controller;


use App\Entity\DataUserPaypal;
use App\Form\DataUserPaypalType;
use App\Repository\DataUserPaypalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


#[Route('/data/user/paypal')]
class DataUserPaypalController extends AbstractController
{
    #[Route('/', name: 'app_data_user_paypal_index', methods: ['GET'])]
    public function index(DataUserPaypalRepository $dataUserPaypalRepository): Response
    {
        return $this->render('data_user_paypal/index.html.twig', [
            'data_user_paypals' => $dataUserPaypalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_data_user_paypal_new', methods: ['GET', 'POST'])]
    public function new( Request $request, EntityManagerInterface $entityManager): Response
    {
        $dataUserPaypal = new DataUserPaypal();
        $form = $this->createForm(DataUserPaypalType::class, $dataUserPaypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user_id = $this->getUser();
            $dataUserPaypal->setUserId($user_id);
            $entityManager->persist($dataUserPaypal);
            $entityManager->flush();

        }


        return $this->renderForm('data_user_paypal/new.html.twig', [
            'data_user_paypal' => $dataUserPaypal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_data_user_paypal_show', methods: ['GET'])]
    public function show(DataUserPaypal $dataUserPaypal): Response
    {
        return $this->render('data_user_paypal/show.html.twig', [
            'data_user_paypal' => $dataUserPaypal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_data_user_paypal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DataUserPaypal $dataUserPaypal, DataUserPaypalRepository $dataUserPaypalRepository): Response
    {
        $form = $this->createForm(DataUserPaypalType::class, $dataUserPaypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dataUserPaypalRepository->save($dataUserPaypal, true);

            return $this->redirectToRoute('app_data_user_paypal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('data_user_paypal/edit.html.twig', [
            'data_user_paypal' => $dataUserPaypal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_data_user_paypal_delete', methods: ['POST'])]
    public function delete(Request $request, DataUserPaypal $dataUserPaypal, DataUserPaypalRepository $dataUserPaypalRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dataUserPaypal->getId(), $request->request->get('_token'))) {
            $dataUserPaypalRepository->remove($dataUserPaypal, true);
        }

        return $this->redirectToRoute('app_data_user_paypal_index', [], Response::HTTP_SEE_OTHER);
    }
}
