<?php
class Producto
{
    private $nombre;
    private $precio;
    private $categoria;

    public function __construct($nombre, $precio, $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }
    public function getPrecio(): float
    {
        return $this->precio;
    }
    // Getters y setters para las propiedades del producto
}
