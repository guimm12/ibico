<?php 
session_start();
include_once("pedidos_class.php");


	//$img = $_POST[''];
   
    $cd=$_SESSION['cd_usuario'];
	$title = $_POST['Ped_title'];
	$estado = $_POST['Ped_estado'];
	$municipio = $_POST['Ped_municipio'];
	$bairro = $_POST['Ped_bairro'];
	$categoria = $_POST['Ped_categoria'];
	$descri = $_POST['Ped_descrava'];

	$obj_pedido = new pedido($title,$descri,$cd,$estado,$municipio,$bairro,$categoria);

	$obj_pedido->AddPeido();






?>