<?php
class Salsa
{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}
?>