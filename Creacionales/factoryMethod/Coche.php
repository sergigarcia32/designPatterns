<?php
include_once('Vehiculo.php');
class Coche implements Vehiculo
{

    private $tipoVehciulo;

    function __construct($tipoVehciulo)
    {
        $this->tipoVehciulo = $tipoVehciulo;
    }

    public function getTipoVehiculo()
    {
        return $this->tipoVehciulo;
    }
    function encenderVehiculo()
    {
        echo "El " . $this->tipoVehciulo . " se ha encendido";
    }
}
