
<?php
session_start();
include_once("conexao_class.php");

  $email = $_POST['lg-login'];

  $senha = $_POST['lg-senha'];


  $My = new MySQLiConnection();// conecta-se automaticamente ao servidor MySQL
  $verifica = "SELECT * FROM tb_usuario WHERE nm_email = '$email' AND cd_senha = '$senha'";

// a conexão é fechada automaticamente no fim do script.
      // retornando a falta de paramentro ao ajax      

      $result = $My->query($verifica) or die(mysql_error());
           
      
        if (mysqli_num_rows($result)<=0)
        {
          sleep(1);
          echo"1";

     

        
        }

        else{
        // caso o usuario sejá autenticado a sessão é criada
          

          $verifica2 = "SELECT cd_usuario, Nome FROM usuario WHERE email = '$email' AND senha = '$senha'";
          $result= $My->query($verifica2);
          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          $_SESSION['cd_usuario'] = $result[0]; 
          $_SESSION['Nome'] = $result[1];
          setcookie("login",$email);
          sleep(1);      
          echo"Bem vindo $result[1]!";
        }
      

       
?>