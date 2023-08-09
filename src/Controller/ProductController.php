<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public function __construct(private readonly ProductService $productService){}

   #[Route('/product', name: 'app_product')]
    public function index(): Response
    {

//            INSERÇÃO
//            $product = new Product();
//            $product->setName('Produto test2');
//            $product->setDescription('Descrição2');
//            $product->setBody('Info Produto2');
//            $product->setSlug('produto-teste 2');
//            $product->setPrice(2990);
//            $product->setCreatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));
//            $product->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));
//
//            $this->productService->save($product, flush: true);


//          ATUALIZAÇÃO
//          FORMA ANTIGA sf 5.4
//          $product = $this->getDoctrine->getRepository(Product::class)->find(1);
//          FORMA ATUAL sf 6
//           $product = $this->productService->find(1);
//
//           $product->setName('Produto 2 Atualizado');
//           $product->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));
//
//           $this->productService->save($product, flush: true);

//          REMOÇÃO
//            $product = $this->productService->find(1);
//            $this->productService->remove($product,  flush: true);


            //Busca de todos os produtos

//                $products = $this->productService->findAll();
//                dd($products);


            //Busca um produto especifico
//
//                    $product = $this->productService->find(2);
//                    print $product->getName();



            //Busca um produto via slug
                // Retorna todos (ou seja um array) conforme o array de parametros passado
                //IMPORTANTE

//                $product = $this->productService->findBy([
//                        'price'=> 2930,
//                        'description' => 'Foto'
//                ]);

            //Buscando um produto via slug com o findOneBy

                $product = $this->productService->findOneBy(['id'=> 3]);

                dd($product);



        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
