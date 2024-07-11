<?php
include_once("ICoffeeDecorator.php");
class MilkDecorator implements ICoffeeDecorator
{
    private $coffee;

    public function setCoffee(ICoffeeDecorator $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getPrice(): float
    {
        return $this->coffee->getPrice() + 1.5; // Add milk price
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . " with milk";
    }
}