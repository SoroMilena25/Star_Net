<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommenterController extends AbstractController
{
    /**
     * @Route("/commenter", name="app_commenter")
     */
    public function index(): Response
    {
        return $this->render('commenter/index.html.twig', [
            'controller_name' => 'CommenterController',
        ]);
    }
}
