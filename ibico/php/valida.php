
<?php 
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
          
          setcookie("login",$email);


      $verifica2 = mysql_query("SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
       $result=mysql_fetch_row($verifica2);

       
        echo"<script language='javascript' type='text/javascript'>alert('Bem vindo ! $result ' );window.location.href='../html/pagina1.html';</script>";
        }
    }
?>