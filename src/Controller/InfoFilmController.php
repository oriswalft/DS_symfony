<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoFilmController extends AbstractController
{
    #[Route('/film/{id}/info', name: 'app_info_film')]
    public function index(Request $request, Films $article): Response
    {
        return $this->render('info_film/index.html.twig', [
            'controller_name' => 'InfoFilmController',
        ]);
    }
}
