<?php
sleep(1);
header('Content-Type: text/html; charset=utf-8');
$connect = mysqli_connect('localhost:3306','root','');
$db = mysqli_select_db($connect,'db_ibico');
$NomeMuni=utf8_decode($_POST['Nome']);
$pegaUf = mysqli_query($connect,"SELECT UF FROM Estado WHERE Nome ='".$NomeMuni."'") or die("erro ao selecionar");
$result=mysqli_fetch_row($pegaUf);
$pegaMunicipio = mysqli_query($connect,"SELECT Nome FROM Municipio WHERE UF = '".$result[0]."'") or die("erro ao selecionar");
foreach ($pegaMunicipio as $Municipio) 
{
$municiopUTF = utf8_encode($Municipio['Nome']);
	echo '<option>'.$municiopUTF.'</option>';# code...
}
?>