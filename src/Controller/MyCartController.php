<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyCartController extends AbstractController
{
    #[Route('/my/cart', name: 'app_my_cart')]
    public function index(): Response
    {
        return $this->render('my_cart/index.html.twig', [
            'controller_name' => 'MyCartController',
        ]);
    }
}
