<?php

namespace App\Products;


class Car implements Rentable
{
    private string $name;
    private string $model;
    private int $consumption;
    private int $price;

    public function __construct(string $name, string $model, int $consumption, int $price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->consumption = $consumption;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getConsumption(): int
    {
        return $this->consumption;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function id(): string
    {
        return 'CAR_' . $this->getName() . $this->getModel();
    }


}