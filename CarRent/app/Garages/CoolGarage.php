<?php


namespace App\Garages;


use App\Products\RentableCollection;


class CoolGarage implements Garages
{
    private RentableCollection $rentals;

    public function __construct()
    {
        $this->rentals = new RentableCollection();
        $rentalsFromJson = json_decode(file_get_contents("storage/Rental.json"), true, 512, JSON_THROW_ON_ERROR);

        foreach ($rentalsFromJson as $rental) {
            $type = 'App\\Products\\' . $rental['type'];
            $this->rentals->add(new $type($rental['name'],
                $rental['model'],
                $rental['consumption'],
                $rental['price']), $rental['id'], $rental['rented']);
        }
    }

    public function getRentals(): RentableCollection
    {
        return $this->rentals;
    }

    public function rent(string $id): void
    {
        $rentalsFromJson = json_decode(file_get_contents("storage/Rental.json"), true, 512, JSON_THROW_ON_ERROR);
        if ($rentalsFromJson[$id]['rented'] === false) {
            $rentalsFromJson[$id]['rented'] = true;
        } else {
            $rentalsFromJson[$id]['rented'] = false;
        }
        file_put_contents("storage/Rental.json", json_encode($rentalsFromJson, JSON_THROW_ON_ERROR));
    }
}