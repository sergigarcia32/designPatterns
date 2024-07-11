<?php
include_once("Producto.php");
class Libro extends Producto
{
    private $autor;

    public function __construct($nombre, $precio, $autor)
    {
        parent::__construct($nombre, $precio, "Libros");
        $this->autor = $autor;
    }

    // Getters y setters para las propiedades específicas del libro (por ejemplo, autor)
}

?>