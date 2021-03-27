<?php

namespace App\Options;
class Rock implements Options
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function victory(Options $option): bool
    {
        return $option instanceof Scissors;
    }
}