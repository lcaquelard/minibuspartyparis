<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'index',
        ]);
    }
    #[Route('/nos-bus', name: 'bus')]
    public function bus(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'bus',
        ]);
    }
    #[Route('/votre-soirée', name: 'program')]
    public function program(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'program',
        ]);
    }
    #[Route('/tarifs', name: 'pricing')]
    public function pricing(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'pricing',
        ]);
    }
    #[Route('/photos', name: 'photos')]
    public function photos(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'photos',
        ]);
    }
    #[Route('/options', name: 'options')]
    public function options(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'options',
        ]);
    }
    #[Route('/devis', name: 'reservation')]
    public function reservation(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'reservation',
        ]);
    }
    #[Route('/mentions-légales', name: 'legals')]
    public function legals(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'legals',
        ]);
    }
    #[Route('/cgu', name: 'cgu')]
    public function cgu(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'cgu',
        ]);
    }
}
