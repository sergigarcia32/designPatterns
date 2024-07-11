<?php

include_once("Coffee.php");

include_once("MilkDecorator.php");
include_once("ChocolateDecorator.php");
include_once("ICoffeeDecorator.php");
$baseCoffee = new Coffee(3.5, "Regular coffee");

$milkDecorator = new MilkDecorator();
$milkDecorator->setCoffee($baseCoffee);

$chocolateDecorator = new ChocolateDecorator();
$chocolateDecorator->setCoffee($milkDecorator); // Decorator chain

echo "Coffee description: " . $chocolateDecorator->getDescription() . "</br>";
echo "Coffee price: $" . $chocolateDecorator->getPrice() . "</br>";
