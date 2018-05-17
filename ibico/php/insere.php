<?php 
	require_once("conexao.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$senha = $_POST['senha'];


	if(isset($nome, $sobrenome,$email,$telefone,$celular,$senha))
	{
		$sql_code = "INSERT INTO usuario(nome,sobrenome,email,telefone,celular,senha) VALUES('$nome','$sobrenome','$email','$telefone','$celular','$senha')";
		$conexao->query($sql_code);
	}
?>