<?php

namespace App;

use App\Garages\Garages;

class RentalStore
{
    private array $garages;

    public function addGarage(Garages $garage): void
    {
        $this->garages[] = $garage;
    }

    public function getGarages(): array
    {
        return $this->garages;
    }

    public function whichGarage(string $productID): Garages
    {
        foreach ($this->garages as $garage) {
            foreach ($garage->getRentalCollection()->getAllProducts() as $product =>
            ['name' => $name, 'model' => $model, 'consumption' => $consumption, 'price' => $price, 'rented' => $rented]) {
                if ($product === $productID) {
                    return $garage;
                }
            }
        }
    }
}