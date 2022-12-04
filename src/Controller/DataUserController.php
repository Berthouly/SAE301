<?php

namespace App\Controller;


use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use App\Entity\DataUser;
use App\Entity\User;
use App\Form\DataUserType;
use App\Repository\DataUserRepository;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


#[Route('/data/user')]
class DataUserController extends AbstractController
{

    #[Route('/', name: 'app_data_user_index')]
    public function index( DataUserRepository $dataUserRepository): Response
    {

            return $this->render('data_user/index.html.twig', [
                'data_users' => $dataUserRepository->findAll(),


            ]);
       }




    #[Route('/new', name: 'app_data_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DataUserRepository $dataUserRepository, EntityManagerInterface $entityManager) : Response
    {
        $dataUser = new DataUser();
        $form = $this->createForm(DataUserType::class, $dataUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $dataUser->setUser($user);
            $entityManager->persist($dataUser);
            $entityManager->flush();

        }

        return $this->renderForm('data_user/new.html.twig', [
            'data_user' => $dataUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_data_user_show', methods: ['GET'])]
    public function show(DataUser $dataUser): Response
    {
        return $this->render('data_user/show.html.twig', [
            'data_user' => $dataUser,
        ]);
    }

    #[Route('/valid', name: 'app_data_user_valid')]
    public function valid(DataUser $dataUser): Response
    {
        return $this->render('data_user/show.html.twig', [
            'data_user' => $dataUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_data_user_edit')]
    public function edit(Request $request, DataUser $dataUser, DataUserRepository $dataUserRepository, EntityManagerInterface $entityManager): Response
    {
        $dataUser = new DataUser();
        $form = $this->createForm(DataUserType::class, $dataUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $dataUser->setUser($user);
            $entityManager->persist($dataUser);
            $entityManager->flush();

        }

        return $this->renderForm('data_user/edit.html.twig', [
            'data_user' => $dataUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_data_user_delete', methods: ['POST'])]
    public function delete(Request $request, DataUser $dataUser, DataUserRepository $dataUserRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dataUser->getId(), $request->request->get('_token'))) {
            $dataUserRepository->remove($dataUser, true);
        }

        return $this->redirectToRoute('app_data_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
