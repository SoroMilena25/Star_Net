<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('connexion/index.html.twig', [//a changer pour l'accueil (juste pour modif ma page connexion)
            'controller_name' => 'HomeController',
        ]);
    }
}
