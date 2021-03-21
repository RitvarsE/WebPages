<?php

use App\Garages\CoolGarage;
use App\Garages\notCoolGarage;
use App\RentalStore;

require_once 'vendor/autoload.php';
$rentalStore = new RentalStore();
$rentalStore->addGarage(new CoolGarage());
$rentalStore->addGarage(new notCoolGarage());

if (!empty($_POST["rent"]) && $_POST["rent"]) {
    $array = explode(',', $_POST["rent"]);
    foreach ($rentalStore->getGarages() as $garage) {
        if (($rentalStore->whichGarage($array[0]) === $garage)) {
            $garage->rent($array[1]);
        }
    }
    header("Refresh:0");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <title>
        Super Rental
    </title>
</head>
<body>
<h1>Welcome to Ritvars Super Rental!</h1>
<table class="styled-table">
    <tr>
        <th>Name</th>
        <th>Model</th>
        <th>Consumption</th>
        <th>Price</th>
        <th>Availability</th>
    </tr>
    <?php foreach ($rentalStore->getGarages() as $garages): ?>
        <?php foreach ($garages->getRentalCollection()->getAllProducts() as $rentals => ['id' => $id,
                       'name' => $name,
                       'model' => $model,
                       'consumption' => $consumption,
                       'price' => $price,
                       'rented' => $rented]): ?>
            <tr>
                <th><?= $name ?></th>
                <th><?= $model ?></th>
                <td><?= $consumption ?> l/100km</td>
                <th><?= $price ?> $/day</th>
                <th><?php echo $rented === false ? '<span style="color:darkgreen;">Available</span>' : '<span style="color:red;">Rented</span>' ?></th>
                <th class="button-style">
                    <form method="post">
                        <button type="submit" name="rent" class="button"
                                value="<?= $rentals . ',' . $id ?>"><?php echo $rented === false ? 'Rent' : 'Return' ?></button>
                    </form>
                </th>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
</body>
</html>