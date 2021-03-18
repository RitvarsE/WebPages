<?php


namespace App;


class VehiclesCollection
{
    private array $products;

    public function add(Vehicle $vehicle): void
    {
        $this->products[] = $vehicle;
    }
    public function getProducts(): array
    {
        return $this->products;
    }

}