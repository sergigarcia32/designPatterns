<?php
interface PizzaBuilder
{
    public function setMasa(Masa $masa): PizzaBuilder;

    public function setSalsa(Salsa $salsa): PizzaBuilder;

    public function addIngrediente(Ingrediente $ingrediente): PizzaBuilder;

    public function build(): Pizza;
}
