<?php
include_once("CocheDiesel.php");
include_once("CamionDiesel.php");
include_once("Vehiculo2.php");
include_once("AbstractVehiculosFactory.php");
class DieselVehiculoFactory extends AbstractVehiculosFactory
{
    function crearCoche(): Vehiculo2
    {
        return new CocheDiesel();
    }

    function crearCamion(): Vehiculo2
    {
        return new CamionDiesel();
    }
}
