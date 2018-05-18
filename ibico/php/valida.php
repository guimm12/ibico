<?php 
include_once("conexao.php");
  $email = isset($_POST['login']) ? $_POST['login'] : '';
  $entrar = isset($_POST['entrar']) ? $_POST['entrar'] : '';
  $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    if (isset($entrar)) {          
      $verifica =" SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
      
        if (mysql_num_rows($conexao->query($verifica))<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/login.php';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:valida.php");
        }
    }
?>

