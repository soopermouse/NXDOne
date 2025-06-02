<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PurchasingController extends AbstractController
{
    #[Route('/purchasing', name: 'app_purchasing')]
    public function index(): Response
    {
        return $this->render('purchasing/index.html.twig', [
            'controller_name' => 'PurchasingController',
        ]);
    }
}
