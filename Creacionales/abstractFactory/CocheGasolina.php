<?php
include_once("Vehiculo2.php");
class CocheGasolina implements Vehiculo2
{
function arrancar(): string
{
return "Arrancando el coche gasolina...";
}
}
?>
