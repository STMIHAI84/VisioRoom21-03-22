<?php

namespace App\Controller;

use App\Entity\UrlAdress;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AuthController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'home' => 'MainController',
        ]);
    }

    public function postData(Request $request, EntityManagerInterface $manager): Response
    {
        $data = $request->getContent();
        $url = new UrlAdress();
        $form = $this->json($data);
        $url->setUrl($data);
        $manager->persist($url);
        $manager->flush();
        return $this->redirectToRoute('admin_dash');
    }

    public function post(Request $request, EntityManagerInterface $manager): Response
    {

        $uri = substr($request->getRequestUri(), 7);
        $link = $this->getDoctrine()->getRepository(UrlAdress::class)->findOneBy([], ['id' => 'DESC'])->getUrl();
//      permission to access room with strict condition
        if ($uri === $link) {
            return $this->render('video/video.html.twig', [
                'home' => 'MainController',
            ]);
        }
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig');
    }

}