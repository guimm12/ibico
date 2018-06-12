<?php
include_once("conexao.php");
include_once("anuncios_class.php");

$nm_titulo=$_POST['Anun_title'];
$ds_anuncio=$_POST['Anun_desc'];
$nm_estado=$_POST['Anun_estado'];
$nm_cidade=$_POST['Anun_municipio'];
$nm_bairro=$_POST['Anun_bairro'];




$obj_anuncio= new anuncio($nm_titulo,$ds_anuncio,$_SESSION['senha'],$nm_estado,$nm_cidade,$nm_bairro);

if($obj_anuncio->AddAnuncio())
{

 echo "rodou";

}

else
{
  echo "1";

}





?>