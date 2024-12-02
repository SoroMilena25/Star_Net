<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AimerController extends AbstractController
{
    /**
     * @Route("/aimer", name="app_aimer")
     */
    public function index(): Response
    {
        return $this->render('aimer/index.html.twig', [
            'controller_name' => 'AimerController',
        ]);
    }
}
