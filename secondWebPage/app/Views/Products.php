<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .tg  {border-collapse:collapse;border-color:#aaa;border-spacing:0;}
        .tg td{background-color:#fff;border-color:#aaa;border-style:solid;border-width:1px;color:#333;
            font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
    </style>
</head>
<body>
<?php include('header.html'); ?>
<table class="tg">
        <tr>
            <td>Vehicle</td>
            <td>Speed</td>
        </tr>
        <?php foreach($this->vehicles as $vehicle): ?>
            <tr>
                <td><?= ucfirst($vehicle->getName()) ?></td>
                <td><?= $vehicle->getSpeed() ?>km/h</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>