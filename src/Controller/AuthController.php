<?php

namespace App\Controller;

use App\Entity\Room;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;

#[Route('/user')]
class AuthController extends AbstractController
{

    #[Route('/dash', name: 'admin_dash')]
    public function dash(Request $request): Response
    {
        return $this->render('dashboard/dashboard.html.twig', [
            'controller_name' => 'AuthController',
        ]);

    }

    #[Route('/update', name: 'user_update', methods: ['GET', 'POST'])]
    public function forme(Request $request, EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();
        $form = $this->createFormBuilder($user) //$forme est un object complex
        ->add('fullName', TextType::class)
            ->add('email', EmailType::class)
            ->add('rooms', EntityType::class, [
                'class' => Room::class,
                'multiple' => true,
//                'placeholder' => '-- Votre choix --',
                'choice_label' => 'name',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
                'label' => false,
                'by_reference' => false,
                'attr' => [
                    'class' => 'rooms']
            ])
            ->add('imageFile', VichImageType::class, [
                'delete_label' => 'Remove file',
                'download_label' => 'Download file',
                'required' => false
            ])
            ->getForm();


        $form->handleRequest($request);//traitement du formulaire(submission)
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$user->getId()) {
                $user->setCreatedAt(new \DateTime());
            }
            // 4) save the user
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash(
                'notice',
                'Your changes were saved!'
            );
            return $this->redirectToRoute('app_login');
        }
        return $this->render('dashboard/userEdit.html.twig', [
            'formUser' => $form->createView(),//on passe a twig une variable form
            'editMode' => $user->getId(),
        ]);
    }


    #[Route('/user/{id}', name: 'user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('Admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }
}
