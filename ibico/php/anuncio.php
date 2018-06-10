<?php 
	require_once('conexao.php');
	require_once('usuario.php');


	//ve se os campos formação, cargo, descrição do curriculo já foram previamente preenchidos,
	//caso verdadeiro descarta esses campos para o preenchimento
	if (isset($usuario->getFormacao()) && isset($usuario->getCargo()) && isset($usuario->getDescricaoCurriculo())) {
		
		echo "<script language='javascript' type='text/javascript'>
		var remove = document.getElementById(/'formacao/');
		var remove2 = document.getElementById(/'cargo/');
		var remove3 = document.getElementById(/'descricao_curriculo/');

		remove.parentNode.removeChild(remove);
		remove2.parentNode.removeChild(remove2);
		remove3 = parentNode.removeChild(remove3);
		</script>";
		$contato = $_POST['contato'];
		$titulo = $_POST['titulo'];
		$descricao_servico = $_POST['descricao_servico'];
		$uf = $_POST['uf'];
		$estado = $_POST['estado'];
		$municipio = $_POST['municipio'];
		$bairro = $_POST['bairro'];
	}
	else
	{
		$contato = $_POST['contato'];
		$titulo = $_POST['titulo'];
		$descricao_servico = $_POST['descricao_servico'];
		$uf = $_POST['uf'];
		$estado = $_POST['estado'];
		$municipio = $_POST['municipio'];
		$bairro = $_POST['bairro'];
		$formacao = $_POST['formacao'];
		$cargo = $_POST['cargo'];
		$descricao_curriculo = $_POST['descricao_curriculo'];
	}

	
	public function criaAnuncioPelaPrimeiraVez()
	{
		$sql_code = "INSERT INTO anuncio VALUES(NULL,NOW(),'$contato','$titulo','$descricao_servico',0.0);";
		$sql_code2 = "INSERT INTO localidade VALUES(NULL,'$uf','$estado','$municipio','$bairro');";
		$sql_code3 = "UPDATE usuario SET formacao = '$formacao', cargo = '$cargo', ds_curriculo = '$descricao_curriculo' where cd_usuario = '$usuario->getID()';";
		$conexao->query($sql_code);
		$conexao->query($sql_code2);
		$conexao->query($sql_code3);
	}
	public function criaAnuncio()
	{
		$sql_code = "INSERT INTO anuncio VALUES(NULL,NOW(),'$contato','$titulo','$descricao_servico',0.0);";
		$sql_code2 = "INSERT INTO localidade VALUES(NULL,'$uf','$estado','$municipio','$bairro');";
		$conexao->query($sql_code);
		$conexao->query($sql_code2);
	}
 ?>