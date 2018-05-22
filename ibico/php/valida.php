
<?php 
session_start();

  $email = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];


  $connect = mysql_connect('localhost:3306','root','');
  $db = mysql_select_db('ibico');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
         echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../html/login.html';</script>";
      

          die();
        }else{
        // caso o usuario sejá autenticado a sessão é criada
          

           $verifica2 = mysql_query("SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
       $result=mysql_fetch_row($verifica2);

          $_SESSION['email'] = $email;
          $_SESSION['senha'] = $senha;
          $_SESSION['nome'] = $result[0];
          
          setcookie("login",$email);


     

       
        echo"<script language='javascript' type='text/javascript'>alert('Bem vindo ! $result[0] ' );window.location.href='pagina1.php';</script>";
        }
    }
?>