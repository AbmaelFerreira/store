<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/products', name: 'admin_')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'index_products')]
    public function index(): Response
    {
        return $this->render('admin/product/index.html.twig', [
            'controller_name' => 'ProductControllerDefault',
        ]);
    }

    #[Route('/create', name: 'create_products')]
    public function create()
    {

    }

         //Antes no PHP a referencia do metodo era da seguinte forma: methods={"POST"}
    #[Route('/store', name: 'store_products', methods:"POST")]
    public function store()
    {

    }

    #[Route('/edit/{product}', name: 'edit_products')]
    public function edit($product)
    {

    }

    #[Route('/update/{product}', name: 'update_products', methods:"POST")]
    public function update($product)
    {

    }

    #[Route('/remove/{product}', name: 'remove_products', methods:"POST")]
    public function remove($product)
    {

    }
}
