<?php
include_once("PizzaBuilder.php");
include_once("Pizza.php");
class ClassicPizzaBuilder implements PizzaBuilder
{
    private $masa;
    private $salsa;
    private $ingredientes = [];

    public function setMasa(Masa $masa): PizzaBuilder
    {
        $this->masa = $masa;
        return $this;
    }

    public function setSalsa(Salsa $salsa): PizzaBuilder
    {
        $this->salsa = $salsa;
        return $this;
    }

    public function addIngrediente(Ingrediente $ingrediente): PizzaBuilder
    {
        $this->ingredientes[] = $ingrediente;
        return $this;
    }

    public function build(): Pizza
    {
        return new Pizza($this->masa, $this->salsa, $this->ingredientes);
    }
}
?>