<?php
include_once("ProductoCompuesto.php");
include_once("Libro.php");
include_once("DVD.php");
$librosFiccion = new ProductoCompuesto("Libros de Ficción", "Libros");
$librosFiccion->agregarProducto(new Libro("El Señor de los Anillos", 15.99, "J.R.R. Tolkien"));
$librosFiccion->agregarProducto(new Libro("Matar a un Ruiseñor", 10.99, "Harper Lee"));

$librosNoFiccion = new ProductoCompuesto("Libros de No Ficción", "Libros");
$librosNoFiccion->agregarProducto(new Libro("Sapiens: Una Breve Historia de la Humanidad", 22.99, "Yuval Noah Harari"));

$DVDNoFiccion = new ProductoCompuesto("DVD no ficción", "DVD");
$DVDNoFiccion->agregarProducto(new DVD("DVD Test: Una Breve Historia de la Humanidad", 22.99, "Test DVD"));

$librosFiccion->printProductosCompuestos($librosFiccion);
?>