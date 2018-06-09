<?php
	$server="localhost:3306";
	$user="root";
	$pass="";
	$dbname="ibico";

	$conexao = new mysqli($server,$user,$pass,$dbname);

	if($conexao->connect_errno)
	{
		echo "Falha na conexão:(".$conexao->connect_errno.") ".$conexao->connect_error;
	}
	
?>