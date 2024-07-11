<?php
include_once('FactoriaVehiculos.php');

class FabricaCamion extends FactoriaVehiculos
{
    public function crearVehiculo()
    {
        $tipoVehciulo = "Camión";
        return new Camion($tipoVehciulo);
    }
}
