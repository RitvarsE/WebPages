<?php

namespace App\Garages;

use App\Products\RentableCollection;

interface Garages
{
    public function getRentals(): RentableCollection;

    public function rent(string $id): void;
}