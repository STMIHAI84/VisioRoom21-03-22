<?php

namespace App\Controller\Room;

use App\Entity\Room;
use App\Form\RoomType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class RoomController extends AbstractController
{
    #[Route('/schedule', name: 'schedule_meeting')]
    public function add(Request $request, EntityManagerInterface $manager): Response
    {
        {   $room = new Room();
            $form = $this->createForm(RoomType::class, $room);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $manager= $this->getDoctrine()->getManager();
                $manager->persist($room);
                $manager->flush();
                return $this->redirectToRoute('admin_dash', [], Response::HTTP_SEE_OTHER);
            }
            return $this->renderForm('dashboard/schedule.html.twig', [
                'rooms' => $room,
                'form' => $form,
            ]);
        }
    }

    #[Route('/room', name: 'room_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $rooms = $entityManager
            ->getRepository(Room::class)
            ->findAll();
        return $this->render('Admin/room/index.html.twig', [
            'rooms' => $rooms,
        ]);
    }

    #[Route('/room/new', name: 'room_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($room);
            $entityManager->flush();
            return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('Admin/room/new.html.twig', [
            'rooms' => $room,
            'form' => $form,
        ]);
    }

    #[Route('/room/{id}', name: 'room_show', methods: ['GET'])]
    public function show(Room $room): Response
    {
        return $this->render('Admin/room/show.html.twig', [
            'rooms' => $room,
        ]);
    }

    #[Route('/room/{id}/edit', name: 'room_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('Admin/room/edit.html.twig', [
            'rooms' => $room,
            'form' => $form,
        ]);
    }

    #[Route('/room/{id}', name: 'room_delete', methods: ['POST'])]
    public function delete(Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$room->getId(), $request->request->get('_token'))) {
            $entityManager->remove($room);
            $entityManager->flush();
        }
        return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
    }
}
