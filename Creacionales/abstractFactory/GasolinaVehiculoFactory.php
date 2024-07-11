<?php
include_once("CocheGasolina.php");
include_once("CamionGasolina.php");
include_once("AbstractVehiculosFactory.php");
class GasolinaVehiculoFactory extends AbstractVehiculosFactory
{
    function crearCoche(): Vehiculo2
    {
        return new CocheGasolina();
    }

    function crearCamion(): Vehiculo2
    {
        return new CamionGasolina();
    }

   
}
