<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginControllerController extends AbstractController
{
    #[Route('/dashboard', name: 'app_login_controller')]
    public function index(): Response
    {
        return $this->render('login_controller/index.html.twig', [
            'controller_name' => 'LoginControllerController',
        ]);
    }
}
