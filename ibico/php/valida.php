
<?php 
session_start();

  $email = $_POST['lg-login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['lg-senha'];


  $connect = mysqli_connect('localhost:3306','root','');
  $db = mysqli_select_db($connect,'ibico');
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.html#modalentrar';</script>";

     

          die();
        }else{
        // caso o usuario sejá autenticado a sessão é criada
          

           $verifica2 = mysqli_query($connect,"SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
          $result=mysqli_fetch_row($verifica2);
          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          $_SESSION['nome'] = $result[0];  
          setcookie("login",$email);      
          echo"<script language='javascript' type='text/javascript'>alert('Bem vindo ! $result[0] ' );window.location.href='../home.php';</script>";
        }
    }
?>