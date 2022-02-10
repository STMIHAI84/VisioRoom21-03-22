<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Repository\RoomRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;

#[Route('/admin')]
class UserController extends AbstractController
{
    private UserRepository $userRepository;
    private RoomRepository $roomRepository;

    public function __construct(
        RoomRepository $roomRepository,
        UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->roomRepository = $roomRepository;
    }

    /**
     * @throws NonUniqueResultException
     */
    #[Route('/user', name: 'admin_index')]
    public function index(): Response
    {
        return $this->render('Admin/main.html.twig', [
            'countAllUser' => $this->userRepository->countAllUser(),
            'countAllRoom' => $this->roomRepository->countAllRoom(),
            'users' => $this->userRepository->findAll(),
            'rooms' => $this->roomRepository->findAll(),
        ]);
    }


    #[Route('/user/new', name: 'user_new', methods: ['GET', 'POST'])]
    public function form(User $user = null, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('fullName', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class, ['attr' => array('placeholder' => 'min 6 chars')])
            ->add('roles', ChoiceType::class, [
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Super Admin' => 'ROLE_SUPER_ADMIN',
                    'Admin' => 'ROLE_ADMIN',
                ],
            ])
            ->add('isVerified')
            ->add('createdAt', null, ['disabled' => 'disabled'])
            ->add('rooms')
            ->add('imageFile', VichImageType::class, [
                'delete_label' => 'Remove file',
                'download_label' => 'Download file',
                'required' => false
            ])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$user->getId()) {
                $user->setCreatedAt(new \DateTime());
                $user->setPassword(
                    $userPasswordHasherInterface->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }
        return $this->render('Admin/user/user.html.twig', [
            'formUser' => $form->createView(),
        ]);
    }

    #[Route('/user/{id}/edit', name: 'user_edit', methods: ['GET', 'POST'])]
    public function forme(User $user, Request $request, EntityManagerInterface $manager): Response
    {
        if (!$user) {
            $user = new User();
        }
        $form = $this->createFormBuilder($user)
            ->add('fullName', TextType::class)
            ->add('email', EmailType::class)
            ->add('roles', ChoiceType::class, [
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Super Admin' => 'ROLE_SUPER_ADMIN',
                    'Admin' => 'ROLE_ADMIN',
                ],
            ])
            ->add('isVerified')
            ->add('createdAt', null, ['disabled' => 'disabled'])
            ->add('rooms')
            ->add('imageFile', VichImageType::class, [
                'delete_label' => 'Remove file',
                'download_label' => 'Download file',
                'required' => false
            ])
            ->getForm();


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$user->getId()) {
                $user->setCreatedAt(new \DateTime());
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }
        return $this->render('Admin/user/edit.html.twig', [
            'formUser' => $form->createView(),
            'editMode' => $user->getId() !== null,
        ]);
    }

    #[Route('/user/{id}', name: 'user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('Admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/user/{id}', name: 'user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }
        return $this->redirectToRoute('user_show', [], Response::HTTP_SEE_OTHER);
    }
}
