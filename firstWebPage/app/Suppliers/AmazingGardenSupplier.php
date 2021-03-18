<?php

namespace App\Suppliers;

use App\ProductCollection;
use App\Product;
use App\Sellables\Flower;

class AmazingGardenSupplier implements Supplier
{
    private ProductCollection $products;

    public function __construct()
    {
        $data = [];
        $this->products = new ProductCollection();
        $CSVfp = fopen("storage/AmazingGardenSupplier.csv", 'rb');
        if ($CSVfp !== FALSE) {
            while (!feof($CSVfp)) {
                $data[] = fgetcsv($CSVfp, 1000, ",");
            }
        }
        foreach ($data as $flower) {
            $this->products->add(new Product(new Flower($flower[0]), $flower[1]), $flower[2]);
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