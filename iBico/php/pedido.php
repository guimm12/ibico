<?php 
session_start();
include_once("conexao.php");





 function criarPedido()
{
$connect = mysqli_connect('localhost:3306','root','');
$db = mysqli_select_db($connect,'ibico');
	//$img = $_POST[''];
   
    $cd=$_SESSION['cd_usuario'];
	$title = $_POST['Ped_title'];
	$estado = $_POST['Ped_estado'];
	$municipio = $_POST['Ped_municipio'];
	$bairro = $_POST['Ped_bairro'];
	$categoria = $_POST['Ped_categoria'];
	$descri = $_POST['Ped_descrava'];

	if ($query = mysqli_query($connect,"INSERT INTO pedido (dt_criacao, ds_titulo,  ds_pedido, estado, municipio, bairro, categoria, FK_cd_cliente) values (NOW(),'$title','$descri','$estado', '$municipio', '$bairro', '$categoria','$cd')"))
	{
		echo"<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso $email !');window.location.href='../pedidos.php';</script>";
	 	
	 }

	 else
	 {

	 	echo"<script language='javascript' type='text/javascript'>alert('Erro ao tentar registrar o pedido por favor tente novamente !');window.location.href='../pedidos.php';</script>";
	 }




}

function alteraPeido()
{


}

 function excluiPedido()
{



	
}

function buscaLocalidade()
{
//$estado = isset($_GET['estado']) ? $_GET['estado'] : '';



//$mysql="SELECT * FROM Estado";

//$resultado = mysqli_query($conexao,$mysql);

//while ($rows_nivel_acesso = mysqli_fetch_assoc($resultado))
//{
//return $rows_nivel_acesso;
//}

	
}

?>