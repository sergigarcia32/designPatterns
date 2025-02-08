<?php
include_once("Cocina.php");
include_once("Entrega.php");
include_once("Pago.php");

class PedidoFacade
{

    private $cocina;
    private $pago;
    private $entrega;

    public function __construct()
    {
        $this->cocina = new Cocina();
        $this->pago = new Pago();
        $this->entrega = new Entrega();
    }

    public function realizarPedido()
    {
        $this->cocina->prepararComida();
        $this->pago->procesarPago();
        $this->entrega->entregarPedido();
        echo "Pedido completado.\n";
    }
}
