<?php 

/**
 * Nesse caso hipotetico, usamos nesse documento o NameSpace Pedido que tem a classe ItemPedido
 */
include "Pedido.php";


use Teste\ItemPedido;

$obPedido = new ItemPedido();

$obPedido->pedido()

?>