<?php 
	require_once("conexao.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$senha = $_POST['senha'];



  $sql_verif = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email'") or die("erro ao selecionar");
 if(mysqli_num_rows($sql_verif)<=0)
 	{
	if(isset($nome, $sobrenome,$email,$sexo,$telefone,$celular,$senha)or die("erro ao selecionar"))
	{
		$sql_code = "INSERT INTO usuario(nome,sobrenome,email,sexo,telefone,celular,senha) VALUES('$nome','$sobrenome','$email','$sexo','$telefone','$celular','$senha')";
		$conexao->query($sql_code);
		echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso ! ' );window.location.href='../index.html#modalentar ';</script>";
	}
	else{

          echo"<script language='javascript' type='text/javascript'>alert('Dados inválidos, por favor tente novamente ' );window.location.href='../index.html#modalregistrar ';</script>";
	    }
	}
else{
	
   echo"<script language='javascript' type='text/javascript'>alert('Email já cadastrado ! ' );window.location.href='../index.html#modalregistrar ';</script>";
    }
?>