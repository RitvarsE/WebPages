<?php

namespace App\Products;

class RentableCollection
{
    private array $rentals = [];

    public function add(Rentable $product, int $id): void
    {
        $identifier = $product->id();
        $this->rentals[$identifier] = [
            "id" => $id,
            "name" => $product->getName(),
            "model" => $product->getModel(),
            "consumption" => $product->getConsumption(),
            "price" => $product->getPrice(),
            "rented" => $product->getRented()
        ];
    }

    public function getRentals(): array
    {
        return $this->rentals;
    }
}