<?php

include_once("Coffee.php");
interface ICoffeeDecorator
{
    public function setCoffee(Coffee $coffee);
    public function getPrice(): float;
    public function getDescription(): string;
}