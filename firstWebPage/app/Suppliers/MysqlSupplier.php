<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Sellables\Flower;
use Medoo\Medoo;

class MysqlSupplier implements Supplier
{
    private ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection();
        $database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'storage',
            'server' => 'localhost',
            'username' => '',
            'password' => ''
        ]);
        $flowers = $database->select('flowers', [
            'flower',
            'price',
            'amount'
        ]);
        foreach ($flowers as $flower) {
            $this->products->add(new Product(new Flower($flower['flower']), $flower['price']), $flower['amount']);
        }
    }


    public function buy(object $productName, int $howMuch): void
    {
        foreach ($this->products->all() as $barCode => ['product' => $product, 'amount' => $amount]) {
            if ($productName === $product->getSellable()) {
                $this->products->sell($product, $howMuch);
            }
        }
    }


    public function getProducts(): ProductCollection
    {
        return $this->products;
    }
}