<?php
include_once("Producto.php");
class DVD extends Producto
{
    private $director;

    public function __construct($nombre, $precio, $director)
    {
        parent::__construct($nombre, $precio, "DVDs");
        $this->director = $director;
    }

    // Getters y setters para las propiedades específicas del DVD (por ejemplo, director)
}
