<?php

    declare(strict_types=1);

    namespace App\Service;

    use App\Entity\Product;
    use App\Repository\ProductRepository;
    use Doctrine\ORM\Mapping as ORM;

    class ProductService
    {
        private readonly ProductRepository $productRepository;

        public function __construct(ProductRepository $productRepository)
        {
            $this->productRepository = $productRepository;
        }

        public function save(Product $entity, ?bool $flush): void
        {
            //$this->getEntityManager()->persist($entity);
            $this->productRepository->save($entity, $flush);
        }
    }