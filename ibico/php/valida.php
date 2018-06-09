
<?php 
session_start();

  $email = $_POST['lg-login'];

  $senha = $_POST['lg-senha'];


  $connect = mysqli_connect('localhost:3306','root','');
  $db = mysqli_select_db($connect,'ibico');
      // retornando a falta de paramentro ao ajax
      
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          sleep(1);
        echo"1";

     

        
        }else{
        // caso o usuario sejá autenticado a sessão é criada
          

           $verifica2 = mysqli_query($connect,"SELECT cd_usuario, Nome FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
          $result=mysqli_fetch_row($verifica2);
          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          $_SESSION['cd_usuario'] = $result[0]; 
          $_SESSION['Nome'] = $result[1];
          setcookie("login",$email);
          sleep(1);      
          echo"Bem vindo $result[1]!";
        }
    
?>