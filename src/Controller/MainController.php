<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AuthController
{
    #[Route('/', name:'home' )]
    public function index():Response
    {
        return $this->render('home.html.twig', [
            'home' => 'MainController',
        ]);
    }

    #[Route('/visio', name:'video' )]
    public function join():Response
    {
        return $this->render('video/ video.html.twig', [
            'home' => 'MainController',
        ]);
    }
}