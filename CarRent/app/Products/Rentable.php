<?php

namespace App\Products;

interface Rentable
{
    public function getName(): string;

    public function getModel(): string;

    public function getConsumption(): int;

    public function getPrice(): int;

    public function id(): string;
}