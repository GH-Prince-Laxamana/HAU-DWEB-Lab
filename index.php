<?php

// Activity: DWEB Prelim Lab 1 (Part 1: Basic Page)
// Author: Laxamana, Prince
// Section: WD-203
// Date: December 03, 2025

$username = "Dannah Mikayla";
$greeting = "Hello, " . $username . "!";

$offer = [
    'name' => 'Super Special Limited Amazing Siomai', 
    'qty' => 5, 
    'normal-price' => 15.00,
    'discounted-price' => 7.00
];

$usual_price = $offer['qty'] * $offer['normal-price'];
$offer_price = $offer['qty'] * $offer['discounted-price'];

$saving = $usual_price - $offer_price;

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
    <div class="overlay" style="height: 900px;"></div>
    <?php require 'includes/header.php' ?>

    <h1><?php echo $greeting ?></h1>

    <p style="margin-top: 1em;">
        Do not miss your chance in buying our 
        <i><?= $offer['name'] ?></i>!
    </p>

     <img src="img/siomai.jpg" alt="<?= $offer['name'] ?>">

    <div class="saving">
        <h1>Save P<?= $saving ?></h1>
    </div>

    <p style="margin-top: -10px;">
        <strong>Buy 5 packs for only P<?= $offer_price ?>.</strong> (usual price P<?= $usual_price ?>)
    </p>

    <?php require 'includes/footer.php' ?>

</body>

</html>