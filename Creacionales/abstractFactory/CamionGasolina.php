<?php
include_once("Vehiculo2.php");
class CamionGasolina implements Vehiculo2
{
    function arrancar(): string
    {
        return "Arrancando el camión gasolina...";
    }
}
?>