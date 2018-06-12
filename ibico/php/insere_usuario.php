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
 	if(isset($_POST['terms']))
 	{
	if(isset($nome, $sobrenome,$email,$sexo,$telefone,$celular,$senha) AND is_numeric($telefone) AND is_numeric($celular))
		{
			$sql_code = "INSERT INTO tb_usuario(nm_nome,nm_sobrenome,nm_email,sx_sexo,cd_telefone_fixo,cd_telefone_movel,cd_senha) VALUES('$nome','$sobrenome','$email','$sexo','$telefone','$celular','$senha')";
			$conexao->query($sql_code);
			// retornando ao sucesso no registro
			echo"4";
			}
			else{
				// retornando ao ajax dados inválidos
	          echo"3";
		    }
	    }
	    else{
	    	// retornando ao ajax checkd false
	    	   echo"2";
	    }
else{
	// retornando ao ajax email já cadastrado
   echo"1";
    }
?>