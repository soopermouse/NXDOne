<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HRController extends AbstractController
{
    #[Route('/h/r', name: 'app_h_r')]
    public function index(): Response
    {
        return $this->render('hr/index.html.twig', [
            'controller_name' => 'HRController',
        ]);
    }
}
