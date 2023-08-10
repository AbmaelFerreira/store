<?php

declare(strict_types=1);

namespace App\Controller;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductControllerDefault extends AbstractController
{
    public function __construct(private readonly ProductService $productService){}

   #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductControllerDefault',
        ]);
    }
}
