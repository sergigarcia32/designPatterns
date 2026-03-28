<?php

interface AbstractVehiculosFactory
{
    public function crearCoche(): Vehiculo2;
    public function crearCamion(): Vehiculo2;
}

?>