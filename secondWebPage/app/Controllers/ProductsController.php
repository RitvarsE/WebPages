<?php

namespace App\Controllers;


use App\Services\VehiclesService;

class ProductsController
{
    private array $vehicles;

    public function __construct()
    {
        $this->vehicles = (new VehiclesService())->getCollection()->getProducts();
    }

    public function index(): void
    {
        require_once 'app/Views/Products.php';
    }
}