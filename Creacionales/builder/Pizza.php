<?php
class Pizza
{
    private $masa;
    private $salsa;
    private $ingredientes = [];

    public function __construct(Masa $masa, Salsa $salsa, array $ingredientes)
    {
        $this->masa = $masa;
        $this->salsa = $salsa;
        $this->ingredientes = $ingredientes;
    }

    public function getMasa()
    {
        return $this->masa;
    }

    public function getSalsa()
    {
        return $this->salsa;
    }

    public function getIngredientes()
    {
        return $this->ingredientes;
    }
}
