<?php
include_once("ICoffeeDecorator.php");
class ChocolateDecorator implements ICoffeeDecorator
{
    private $coffee;

    public function setCoffee(ICoffeeDecorator $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getPrice(): float
    {
        return $this->coffee->getPrice() + 2.0; // Add chocolate price
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . " with chocolate";
    }
}