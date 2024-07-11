<?php
include_once("Vehiculo2.php");
class CocheDiesel implements Vehiculo2
{
function arrancar(): string
{
return "Arrancando el coche diesel...";
}
}
?>
