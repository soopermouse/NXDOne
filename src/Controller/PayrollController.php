<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PayrollController extends AbstractController
{
    #[Route('/payroll', name: 'app_payroll')]
    public function index(): Response
    {
        return $this->render('payroll/index.html.twig', [
            'controller_name' => 'PayrollController',
        ]);
    }
}
