<?php

namespace App\Products;


class Bus implements Rentable
{
    private string $name;
    private string $model;
    private int $consumption;
    private int $price;
    private int $rented;

    public function __construct(string $name, string $model, int $consumption, int $price, int $rented)
    {
        $this->name = $name;
        $this->model = $model;
        $this->consumption = $consumption;
        $this->price = $price;
        $this->rented = $rented;
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

    public function getRented(): int
    {
        return $this->rented;
    }

    public function id(): string
    {
        return 'BUS_' . $this->getName() . $this->getModel();
    }


}