<?php
include_once('FactoriaVehiculos.php');

class FabricaCoche extends FactoriaVehiculos
{
    function crearVehiculo()
    {
        $tipoVehciulo = "Coche";
        return new Coche($tipoVehciulo);
    }
}
