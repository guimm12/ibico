<?php 
include_once("conexao.php");

 function criarPedido()
{
	//$img = $_POST[''];
	$connect = mysqli_connect('localhost:3306','root','');
	$db = mysqli_select_db($connect,'ibico');
	$title = $_POST['Ped_title'];
	$email = $_POST['Ped_email'];
	$contato = $_POST['Ped_telefone'];
	$estado = $_POST['Ped_estado'];
	$municipio = $_POST['Ped_municipio'];
	$bairro = $_POST['Ped_bairro'];
	$categoria = $_POST['Ped_categoria'];
	$descri = $_POST['Ped_descrava'];

	if ($query = mysqli_query($connect,"INSERT INTO pedido (dt_criacao, ds_titulo, email, ds_pedido, contato, estado, municipio, bairro, categoria) values (NOW(),'$title','$email','$descri','$contato', '$estado', '$municipio', '$bairro', '$categoria')"))
	{
		echo"<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso !');window.location.href='../home.php';</script>";
	 	
	 }

	 else
	 {

	 	echo"<script language='javascript' type='text/javascript'>alert('Erro ao tentar registrar o pedido por favor tente novamente !');window.location.href='../home.php';</script>";
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