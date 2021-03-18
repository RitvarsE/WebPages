<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Sellables\Flower;

class CheapSupplier implements Supplier
{
    private ProductCollection $products;

    public function __construct()
    {
        $flowers = json_decode(file_get_contents("storage/CheapSupplier.json"), true, 512, JSON_THROW_ON_ERROR);
        $this->products = new ProductCollection();
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