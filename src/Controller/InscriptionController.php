<?php

// src/Controller/InscriptionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(): Response
    {
        return $this->render('inscription.html.twig');
    }

    /**
     * @Route("/connexion", name="login")
     */
    public function login(): Response
    {
        return $this->render('connexion.html.twig');
    }
}
