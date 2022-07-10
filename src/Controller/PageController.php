<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;


class PageController extends AbstractController
{
    // #[Route('/page', name: 'app_page')]
    // public function index(): Response
    // {
    //     return $this->render('page/index.html.twig', [
    //         'controller_name' => 'PageController',
    //     ]);
    // }

    #[Route('/',name: 'app_home')]
    public function listAction(ManagerRegistry $doctrine): Response
    {
    $products = $doctrine->getRepository(Product::class)->findAll();
    return $this->render('page/index.html.twig', [
    'products' => $products
    ]);
    }

    // #[Route('/', name: 'app_home')]
    // public function index(): Response
    // {
    //     return $this->render('page/index.html.twig', [
    //         'controller_name' => 'PageController',
    //     ]);
    // }

    #[Route('/f/a/qs', name: 'app_f_a_qs')]
    public function index2(): Response
    {
        return $this->render('page/faqs.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function index3(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
