<?php
include_once("Producto.php");
class ProductoCompuesto extends Producto
{
    private $productos = [];

    public function __construct($nombre, $categoria)
    {
        parent::__construct($nombre, 0, $categoria); // El precio se calculará más tarde
    }

    public function agregarProducto(Producto $producto)
    {
        $this->productos[] = $producto;
    }

    public function eliminarProducto(Producto $producto)
    {
        foreach ($this->productos as $key => $value) {
            if ($value === $producto) {
                unset($this->productos[$key]);
                break;
            }
        }
    }

    public function getPrecio(): float
    {
        $precioTotal = 0;
        foreach ($this->productos as $producto) {
            $precioTotal += $producto->getPrecio();
        }
        return $precioTotal;
    }

    

    public function getProductos(): array
    {
        return $this->productos;
    }


    function printProductosCompuestos(ProductoCompuesto $productoCompuesto, $indent = 0)
    {
        echo str_repeat(" ", $indent) . $productoCompuesto->getNombre() . " (" . $productoCompuesto->getCategoria() . ") - Precio total: $" . $productoCompuesto->getPrecio() . "\n";

        foreach ($productoCompuesto->getProductos() as $producto) {
            if ($producto instanceof ProductoCompuesto) {
                $this->printProductosCompuestos($producto, $indent + 1);
            } else {
                echo str_repeat(" ", $indent + 1) . $producto->getNombre() . " (" . $producto->getCategoria() . ") - Precio: $" . $producto->getPrecio() . "\n";
            }
        }
    }

    // Getters y setters para las propiedades del producto compuesto (por ejemplo, descripción)
}
?>