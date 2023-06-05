<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterviriController extends AbstractController
{
    #[Route('/registerviri', name: 'app_registerviri')]
    public function index(): Response
    {
        return $this->render('registerviri/index.html.twig', [
            'controller_name' => 'RegisterviriController',
        ]);
    }
}
