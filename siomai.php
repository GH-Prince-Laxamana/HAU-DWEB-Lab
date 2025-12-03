<?php

// Activity: DWEB Prelim Lab 1 (Part 2: Product Page)
// Author: Laxamana, Prince
// Section: WD-203
// Date: December 03, 2025

$name = "Dannah Mikayla";
$greeting = "Hello!";

if ($name) {
    $greeting = "Hello, " . $name . "!";
}

$product = "Super Special Limited Amazing Siomai";
$cost = 10;

$totals = [];
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);

    $totals[$i] = $subtotal - $discount;
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siommy</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="overlay"></div>
    <?php require 'includes/header.php' ?>

    <h1><?= $greeting ?></h1>

    <h2>BUY OUR <?= $product ?>!</h2>

    <img src="img/siomai.jpg" alt="<?= $product ?>">

    <table>
        <tr>
            <th>PACKS</th>
            <th>PRICE</th>
        </tr>

        <?php foreach ($totals as $quantity => $price): ?>
            <tr>
                <td>
                    <?= $quantity ?> 
                    <?php 
                    ($quantity == 1) ? $display = "pack" : $display = "packs";
                    echo $display;
                    ?>
                </td>
                <td>P<?= $price ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php require 'includes/footer.php' ?>
    
</body>

</html>