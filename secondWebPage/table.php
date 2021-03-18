<?php

require_once 'vendor/autoload.php';

use App\Services\VehiclesService;

$vehicles = (new VehiclesService())->getCollection()->getProducts();
foreach ($vehicles as $vehicle) {
    print $vehicle->getName() .  $vehicle->getSpeed();
}