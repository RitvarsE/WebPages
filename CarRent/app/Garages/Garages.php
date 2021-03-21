<?php

namespace App\Garages;

use App\Products\RentableCollection;

interface Garages
{
    public function getRentalCollection(): RentableCollection;

    public function rent(string $id): void;
}