<?php 

session_start();
include_once("conexao.php");
include_once("usuario_class.php");

	require_once("conexao.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$telefone_fixo = $_POST['telefone'];
	$telefone_movel = $_POST['celular'];
	$senha = $_POST['senha'];


$verifica = mysqli_query($conexao,"SELECT * FROM tb_usuario WHERE nm_email = '$email' AND cd_senha = '$senha'") or die("erro ao selecionar");     
        if (mysqli_num_rows($verifica)<=0)
        {
 	if(isset($_POST['terms']))
 	{
	if(isset($nome,$sobrenome,$email,$sexo,$telefone_fixo,$telefone_movel,$senha) AND is_numeric($telefone_fixo) AND is_numeric($telefone_movel))
		{
			$objeto_usu = new usuario($nome,$sobrenome,$telefone_fixo,$telefone_movel,$email,$sexo,$senha);
				if($objeto_usu->AddUsuario())
				{
			// retornando ao sucesso no registro
			echo"rodou";
				}
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
	}
else{
	// retornando ao ajax email já cadastrado
   echo"1";
    }
?>