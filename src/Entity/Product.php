<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

// Esse forma é no synfony 6
//        #[ORM\Entity(repositoryClass: ProductRepository::class)]
//        #[ORM\Table(name: "products")]

//Essa forma é no symfony 5
/**
 * @ORM\Entity(repositoryClass: ProductRepository::class)
 * @ORM\Table(name="products")
 */
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}