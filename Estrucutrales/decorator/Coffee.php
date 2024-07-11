<?php
include_once("ICoffeeDecorator.php");

class Coffee implements ICoffeeDecorator
{
    private $coffee;
    private $price;
    private $description;

    public function __construct($price, $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function setCoffee(ICoffeeDecorator $coffee)
    {
        $this->coffee = $coffee;
    }
    public function getPrice(): Float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
