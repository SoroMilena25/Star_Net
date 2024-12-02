<?php

// src/Controller/InscriptionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription", methods={"GET", "POST"})
     */
    public function inscription(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            // Traitement du formulaire ici, par exemple enregistrer l'utilisateur
            // Vous pouvez récupérer les données avec $request->request->get('nom_du_champ')
        }

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
