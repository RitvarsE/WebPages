<?php

namespace App;
class Vehicle
{
    private string $name;
    private int $speed;
    public function __construct(string $name, int $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

}