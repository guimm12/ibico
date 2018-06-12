<?php 
session_start();
include_once("pedidos_class.php");
sleep(2);

	//$img = $_POST[''];
   

	$nm_titulo = $_POST['Ped_title'];
	$nm_estado = $_POST['Ped_estado'];
	$nm_cidade = $_POST['Ped_municipio'];
	$nm_bairro = $_POST['Ped_bairro'];
	$nm_categoria = $_POST['Ped_categoria'];
	$ds_pedido = $_POST['Ped_descrava'];


	$obj_pedido = new pedido($nm_titulo,$ds_pedido,$_SESSION['cd_usuario'],$nm_estado,$nm_cidade,$nm_bairro,$nm_categoria);
	if($obj_pedido->AddPedido())
	{

		echo "rodou";
	}





?>