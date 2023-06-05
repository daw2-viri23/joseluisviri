<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientviriController extends AbstractController
{
    #[Route('/patientviri', name: 'app_patientviri')]
    public function index(): Response
    {
        return $this->render('patientviri/index.html.twig', [
            'controller_name' => 'PatientviriController',
        ]);
    }
}
