<?php
include_once('ClassicPizzaBuilder.php');
include_once('Massa.php');
include_once('MargheritaPizzaBuilder.php');
include_once('Salsa.php');
include_once('Ingrediente.php');
$pizzaBuilder = new ClassicPizzaBuilder();
$pizza = $pizzaBuilder
->setMasa(new Masa("fina"))
->setSalsa(new Salsa("tomate"))
->addIngrediente(new Ingrediente("pepperoni"))
->addIngrediente(new Ingrediente("cebolla"))
->build();

echo "Pizza: Masa - " . $pizza->getMasa()->getTipo() . ", Salsa - " . $pizza->getSalsa()->getTipo() . ", Ingredientes - " . implode(", ", array_map(function ($ingrediente) {
return $ingrediente->getNombre();
}, $pizza->getIngredientes())) . " </br>";

$margheritaBuilder = new MargheritaPizzaBuilder();
$margheritaPizza = $margheritaBuilder
    ->setMasa(new Masa("fina"))
    ->setSalsa(new Salsa("tomate"))
    ->build();

echo "Margherita Pizza: Masa - " . $margheritaPizza->getMasa()->getTipo() . ", Salsa - " . $margheritaPizza->getSalsa()->getTipo() . ", Ingredientes - " . implode(", ", array_map(function ($ingrediente) {
    return $ingrediente->getNombre();
}, $margheritaPizza->getIngredientes())) . " </br>";

?>

