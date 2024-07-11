<?php
/*

PROBLEMA

Imagina que estás creando una aplicación de gestión logística. 
La primera versión de tu aplicación sólo es capaz de manejar el transporte en camión, 
por lo que la mayor parte de tu código se encuentra dentro de la clase Camión.

Al cabo de un tiempo, tu aplicación se vuelve bastante popular.
 Cada día recibes decenas de peticiones de empresas de transporte marítimo para que incorpores la logística por mar a la aplicación.

 SOLUCION

 El patrón Factory Method sugiere que, 
 en lugar de llamar al operador new para construir objetos directamente,
  se invoque a un método fábrica especial. No te preocupes: 
  los objetos se siguen creando a través del operador new, pero se invocan desde el método fábrica.
 Los objetos devueltos por el método fábrica a menudo se denominan productos.

*/
include_once('Camion.php');
include_once('FabricaCamion.php');
function inicializar()
{
    $tipoVehiculo = "Camión";
    if ($tipoVehiculo == "Camión") {
        return $vehiculo = new FabricaCamion($tipoVehiculo);
    } else if ($tipoVehiculo == "Coche") {
        return $vehiculo = new FabricaCoche($tipoVehiculo);
    }
}

function main()
{
    $vehiculo = inicializar();
    $vehiculocreado = $vehiculo->crearVehiculo();
    $vehiculocreado->encenderVehiculo();
}

main();
