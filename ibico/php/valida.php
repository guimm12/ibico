
<?php
session_start();
include_once("conexao.php");

  $email = $_POST['lg-login'];

  $senha = $_POST['lg-senha'];


 

  $verifica = mysqli_query($conexao,"SELECT * FROM tb_usuario WHERE nm_email = '$email' AND cd_senha = '$senha'") or die("erro ao selecionar");

// a conexão é fechada automaticamente no fim do script.
      // retornando a falta de paramentro ao ajax      

 
           
      
        if (mysqli_num_rows($verifica)<=0)
        {
          sleep(1);
          echo"1";

     

        
        }

        else{
        // caso o usuario sejá autenticado a sessão é criada
          

          $verifica2 = mysqli_query($conexao,"SELECT cd_usuario, nm_nome FROM tb_usuario WHERE nm_email = '$email' AND cd_senha = '$senha'");
          $linha = mysqli_fetch_assoc($verifica2);
          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          $_SESSION['cd_usuario'] = $linha['cd_usuario']; 
          $_SESSION['Nome'] = $linha['nm_nome'];
          setcookie("login",$email);
          sleep(1);      
          echo 'Bem vindo '.$linha['nm_nome'].'!';
        }
      

       
?>