<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- verificando se o usuário está logado -->
<?php
session_start();
if((isset ($_SESSION['email']) == false) and (isset ($_SESSION['senha']) == false))
{
    
   header('location:../html/login.html');
    }

$logado = $_SESSION['nome'];

?>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>
 
<body>
<table width="1335" height="748" border="1">
  <tr>
    <td height="75" colspan="2" bgcolor="#CCCCCC"><center>Ibico
    </center>
    <?php
    echo" Olá, $logado";
    ?>
    <a href="finalizaSessao.php"><lefth><br>Sign-out</br></lefth></a>
    </td>
  </tr>
  <tr>
    <td  width="103" height="570" bgcolor="#CCCCCC">Buscar anúncios 
<!-- formulário de busca de anúncios -->
<form name="frmBusca" method="post" action="
<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
    <input type="text" name="palavra" />
    <input type="submit"  value="Buscar" />
</form>
<!-- formulário de busca de pedidos -->
Buscar pedidos 
<form name="frmBusca" method="post" action="
<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
    <input type="text" name="palavra" />
    <input type="submit"  value="Buscar" />
</form>
    <td width="546"><center>CONTEUDO E ICONES AQUI</center></center></td>
  </tr>

  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>

</body>
</html>