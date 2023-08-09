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

        public function find(int $id): ?Product
        {
           return  $this->productRepository->find($id);
        }

        public function remove(Product $id, $flush): void
        {
              $this->productRepository->remove($id, $flush);
        }

        public function findAll(): ?array
        {
            return  $this->productRepository->findAll();
        }

        public function findBy(array $criterio): ?array
        {
            return  $this->productRepository->findBy($criterio);
        }

        public function findOneBy(array $criterio): ?Product
        {
            return  $this->productRepository->findOneBy($criterio);
        }

    }