<?php
include_once("AbstractVehiculosFactory.php");
include_once("DieselVehiculoFactory.php");
include_once("GasolinaVehiculoFactory.php");
function clientCode(AbstractVehiculosFactory $factory)
{
    $Camion = $factory->crearCamion();
    $Coche = $factory->crearCoche();

    echo $Camion->arrancar() . "</br>";
    echo $Coche->arrancar() . "</br>";
}

clientCode(new DieselVehiculoFactory);
clientCode(new GasolinaVehiculoFactory);
