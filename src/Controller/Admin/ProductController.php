<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/products', name: 'admin_')]
class ProductController extends AbstractController
{
    public function __construct(private readonly ProductService $productService){}
    #[Route('/', name: 'index_products')]
    public function index()
    {

        $products = $this->productService->findAll();
//        var_dump($products);
        return $this->render('admin/product/index.html.twig', compact('products'));
    }

    #[Route('/create', name: 'create_products')]
    public function create()
    {

    }

     //Antes no PHP a referencia do metodo era da seguinte forma: methods={"POST"}
    #[Route('/store', name: 'store_products', methods:"GET")]
    public function store(): void
    {
        $product = new Product();
        $product->setName('Produto test3');
        $product->setDescription('Descrição3');
        $product->setBody('Info Produto3');
        $product->setSlug('produto-teste 3');
        $product->setPrice(2950);
        $product->setCreatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));
        $product->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));

        /*No symfony 4
            $manager = $this->getDoctrine()->getManager();
            $manger->persist($product);
            $manager-flush();

        */

        /*No symfony 5*/
        $this->productService->save($product, flush: true);
    }

    #[Route('/edit/{product}', name: 'edit_products')]
    public function edit($product)
    {
        $product = $this->productService->find($product);
    }

    #[Route('/update/{product}', name: 'update_products', methods:"POST")]
    public function update($product)
    {
      /*
          FORMA ANTIGA sf 4
           $product = $this->getDoctrine->getRepository(Product::class)->find(1);
       */

        /* FORMA ATUAL sf 6 */

        $product = $this->productService->find($product);
        $product->setName('Produto 2 Atualizado');
        $product->setUpdatedAt(new \DateTimeImmutable('now', new \DateTimeZone('America/Cuiaba')));

        $this->productService->save($product, flush: true);
    }

    #[Route('/remove/{product}', name: 'remove_products', methods:"POST")]
    public function remove($product)
    {
        $product = $this->productService->find($product);
        $this->productService->remove($product,  flush: true);
    }
}

    /*
                Busca um produto especifico
                    Pode passar um arrey de critérios
                    Retorna um array de objetos = [{}]
                    $product = $this->productService->findBy([
                            'price'=> 2930,
                            'description' => 'Foto'
                    ]);
            */
    /*
        Buscando um produto via slug com o findOneBy
             Pode passar um arrey de critérios
            Retorna um objeto = {}
            $product = $this->productService->findOneBy(['id'=> 3]);
    */
