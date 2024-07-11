<?php
include_once("Vehiculo2.php");
class CamionDiesel implements Vehiculo2
{
    function arrancar(): string
    {
        return "Arrancando el camión diesel...";
    }
}
?>