<?php
include_once("conexao_class.php");
include_once("usuario_class.php");


$My = new MySQLiConnection();


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone_fixo = $_POST['telefone'];
$telefone_movel = $_POST['celular'];
$senha = $_POST['senha'];

$obj_usu = new usuario($nome,$sobrenome,$telefone_fixo,$telefone_movel,$email,$sexo,$senha);



$My = new MySQLiConnection();// conecta-se automaticamente ao servidor MySQL
  $verifica = "SELECT * FROM tb_usuario WHERE nm_email = '$email'";

// a conexão é fechada automaticamente no fim do script.
      // retornando a falta de paramentro ao ajax      

      $result = $My->query($verifica) or die(mysql_error());
           
      
        if (mysqli_num_rows($result)<=0)
      {
 			if(isset($_POST['terms']))
 				{

				$obj_usu->AddUsuario();
				}
				else{
				// retornando ao ajax dados inválidos
	        		  echo"3";
		   		 	}
      }
 		}

	else{
	// retornando ao ajax email já cadastrado
  		 echo"1";
  		 }
?>