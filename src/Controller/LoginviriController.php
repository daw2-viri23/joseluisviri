<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginviriController extends AbstractController
{
    #[Route('/loginviri', name: 'app_loginviri')]
    public function index(): Response
    {
        return $this->render('loginviri/index.html.twig', [
            'controller_name' => 'LoginviriController',
        ]);
    }
}
