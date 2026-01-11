<?php

namespace App\DTO;

class ProductResponseDTO
{
    private int $id;
    private string $name;
    private float $price;


    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
}
