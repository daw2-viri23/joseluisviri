<?php

namespace App\Controller;
use App\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterviriController extends AbstractController
{
    #[Route('/registerviri', name: 'app_registerviri')]
    public function index(Request $request): Response
    {

        $user = new Users();
        $form = $this->createFormBuilder($user)
    ->add('full_name', TextType::class, [
        'constraints' => [
            new Length([
                'min' => 1,
                'max' => 255,
                'minMessage' => 'El nombre completo debe tener un mínimo de {{ limit }} caracteres',
                'maxMessage' => 'El nombre debe tener un máximo de {{ limit }} caracteres',
            ]),
        ],
    ])
    ->add('enabled', TextType::class, [
        'constraints' => [
            new Length([
                'min' => 1,
                'max' => 255,
                'exactMessage' => 'El campo "enabled" debe tener exactamente {{ limit }} caracteres',
            ]),
        ],
    ])
    ->add('save', SubmitType::class, ['label' => 'Crear usuario'])
    ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
    
                return $this->redirectToRoute('users');
            }


        return $this->render('registerviri/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'RegisterviriController',
        ]);
    }
}
