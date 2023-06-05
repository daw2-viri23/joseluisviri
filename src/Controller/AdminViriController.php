<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminViriController extends AbstractController
{
    #[Route('/admin/viri', name: 'app_admin_viri')]
    public function index(): Response
    {
        return $this->render('admin_viri/index.html.twig', [
            'controller_name' => 'AdminViriController',
        ]);
    }
}
