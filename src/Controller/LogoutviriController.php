<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogoutviriController extends AbstractController
{
    #[Route('/logoutviri', name: 'app_logoutviri')]
    public function index(): Response
    {
        return $this->render('logoutviri/index.html.twig', [
            'controller_name' => 'LogoutviriController',
        ]);
    }
}
