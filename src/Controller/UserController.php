<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\AbonnementRepository;
use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/profile/{id}", name="user_profile")
     */
    public function profile($id, UserRepository $userRepo, AbonnementRepository $abonnementRepo, PublicationRepository $publicationRepo): Response
    {
        // Récupérer l'utilisateur par son id
        $user = $userRepo->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // Récupérer les abonnements (qui suit) et abonnés (qui suivent)
        $abonnements = $abonnementRepo->findBy(['qui' => $user]); // Utilisateur suit
        $abonnees = $abonnementRepo->findBy(['a_qui' => $user]); // Utilisateur est suivi

        // Récupérer les publications de l'utilisateur
        $publications = $publicationRepo->findBy(['user' => $user]);

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'abonnements' => $abonnements,
            'abonnees' => $abonnees,
            'publications' => $publications,
        ]);
    }

   
}