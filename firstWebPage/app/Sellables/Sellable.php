<?php

namespace App\Sellables;
interface Sellable
{
    public function id(): string;

    public function getName(): string;
}