<?php

namespace App\Services;

use App\VehiclesCollection;
use App\Vehicle;

class VehiclesService
{
    private VehiclesCollection $vehicles;

    public function __construct()
    {
        $products = [];
        $this->vehicles = new VehiclesCollection();
        $CSVfp = fopen("storage/products.csv", 'rb');
        if ($CSVfp !== FALSE) {
            while (!feof($CSVfp)) {
                $products[] = fgetcsv($CSVfp, 1000, ",");
            }
        }
        foreach ($products as $product) {
            $this->vehicles->add(new Vehicle($product[0], $product[1]));
        }
    }
    public function getCollection(): VehiclesCollection
    {
        return $this->vehicles;
    }
}