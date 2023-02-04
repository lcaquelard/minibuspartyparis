<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Classes\Pack;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_page' => 'index',
            'route' => '',
            'name' => 'Accueil',
            'title' => 'Mini bus party paris : Découvrez nos soirées de rêve à travers la capitale',
            'slider_pictures_amount' => 11,
        ]);
    }
    #[Route('/nos-packs', name: 'packs')]
    public function packs(): Response
    {
        $packs = array();
        $packs[] = new Pack(1,'transfert atypique', array('carpet', 'driver', 'softs', 'lights', 'bluetooth', 'pick_points'));
        $packs[] = new Pack(2,'transfert atypique', array('carpet', 'driver', 'softs', 'lights', 'bluetooth'));
        $packs[] = new Pack(3,'transfert atypique', array('carpet', 'driver', 'softs', 'lights', 'bluetooth', 'karaoke'));
        $packs[] = new Pack(4,'transfert atypique', array('carpet', 'driver', 'softs', 'lights', 'bluetooth', 'birthday_adult', 'karaoke'));
        return $this->render('pages/packs.html.twig', [
            'current_page' => 'packs',
            'route' => 'nos-packs',
            'name' => 'Nos packs',
            'title' => 'Voyez notre sélections de packs pour accommoder tous vos besoins !',
            'packs' => $packs
        ]);
    }
    #[Route('/votre-soirée', name: 'program')]
    public function program(): Response
    {
        return $this->render('pages/program.html.twig', [
            'current_page' => 'program',
            'route' => 'votre-soirée',
            'name' => 'Votre soirée',
            'title' => 'Voici le plan de soirée que nous vous proposons',
        ]);
    }
    #[Route('/tarifs', name: 'pricing')]
    public function pricing(): Response
    {
        return $this->render('pages/pricing.html.twig', [
            'current_page' => 'pricing',
            'route' => 'tarifs',
            'name' => 'Nos prix',
            'title' => 'Choisissez une formule de bus à la hauteur de vos désirs',
        ]);
    }
    #[Route('/photos', name: 'pictures')]
    public function pictures(): Response
    {
        return $this->render('pages/pictures.html.twig', [
            'current_page' => 'pictures',
            'route' => 'photos',
            'name' => 'Photos',
            'title' => 'Jetez un oeil à ce à quoi votre soirée pourrait ressembler',
        ]);
    }
    #[Route('/options', name: 'options')]
    public function options(): Response
    {
        return $this->render('pages/options.html.twig', [
            'current_page' => 'options',
            'route' => 'options',
            'name' => 'Nos options',
            'title' => 'Nous vous proposons toutes sortes d\'options afin que votre soirée vous ressemble',
            'catering_slider_pictures_amount' => 10,
        ]);
    }
    #[Route('/devis', name: 'reservation')]
    public function reservation(): Response
    {
        return $this->render('pages/reservation.html.twig', [
            'current_page' => 'reservation',
            'route' => 'devis',
            'name' => 'Devis',
            'title' => 'Choisissez votre formule et laissez-nous nous charger du reste !',
        ]);
    }
    #[Route('/mentions-légales', name: 'legals')]
    public function legals(): Response
    {
        return $this->render('pages/legals.html.twig', [
            'current_page' => 'legals',
            'route' => 'mentions-légales',
            'name' => 'Mentions légales',
            'title' => 'Mentions légales',
        ]);
    }
    #[Route('/cgu', name: 'cgu')]
    public function cgu(): Response
    {
        return $this->render('pages/cgu.html.twig', [
            'current_page' => 'cgu',
            'route' => 'cgu',
            'name' => 'Conditions générales d\'utilisation',
            'title' => 'Conditions générales de vente',
        ]);
    }
}
