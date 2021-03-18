<?php
//0: Shop, Flower, FlowerCollection, XSupplier, YSupplier;
//I: Supplier
// no csv faila un no json faila
require_once 'vendor/autoload.php';

use App\Shop;
use App\Suppliers\AmazingGardenSupplier;
use App\Suppliers\CoolGardenSupplier;
use App\Suppliers\CheapSupplier;
use App\Suppliers\MysqlSupplier;

$shop = new Shop();
$shop->addSupplier(new AmazingGardenSupplier);
$shop->addSupplier(new CoolGardenSupplier);
$shop->addSupplier(new CheapSupplier);
$shop->addSupplier(new MysqlSupplier());

if (!empty($_GET['gender']) && !empty($_GET['flower']) && !empty($_GET['amount'])) {

    $productNames = [];
    $whatSex = $_GET['gender'];
    $productName = $_GET['flower'];

    foreach ($shop->products()->all() as ['product' => $product, 'amount' => $amount]) {

        $productNames[] = $product->getSellable()->getName();
        if ($productName === $product->getSellable()->getName()) {
            do {
                $howMuch = $_GET['amount'];
            } while (!is_numeric($howMuch) || $howMuch < 0);

            if ((int)$howMuch <= $amount) {
                $shop->sell($productName, $howMuch);
                print "<br>";
                print 'You bought ' . $howMuch . ' ' . $productName . ', for total: $';
                print number_format($whatSex !== 'female' ? $product->getPrice() * $howMuch
                    : ($product->getPrice() * $howMuch) * 0.8, 2);
                print "<br><br>";
            } else {
                print "We don`t have that much in our store<br>";
            }
        }
    }

    if (!in_array($productName, $productNames, true)) {
        print "Sorry, we don`t have this product in our store<br>";
    }
}
?>
<form>
    <label for="gender">Gender: </label>
    <input type="text" id="gender" name="gender" value=""><br><br>
    <label for="flower">Flower: </label>
    <input type="text" id="flower" name="flower" value=""><br><br>
    <label for="amount">Amount: </label>
    <input type="text" id="amount" name="amount" value=""><br><br>
    <input type="submit" value="Submit">
</form>
<style>
    table, th {
        border: 1px solid black;
    }

    input[type=text], select {
        width: 45%;
        padding: 12px 20px;
        margin-right: auto;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin-right: auto;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<table width="50%">
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Amount</th>
    </tr>
    <?php foreach ($shop->products()->all() as ['product' => $product, 'amount' => $amount]) { ?>
        <tr>
            <th><?php print $product->getSellable()->getName(); ?></th>
            <th><?php print '$ ' . number_format($product->getPrice(), 2); ?></th>
            <th><?php print $amount; ?></th>
        </tr>
    <?php } ?>
</table>

