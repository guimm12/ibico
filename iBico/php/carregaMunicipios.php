<?php

sleep(1);



$connect = mysqli_connect('localhost:3306','root','');
$db = mysqli_select_db($connect,'ibico');



$pegaUf = mysqli_query($connect,"SELECT UF FROM Estado WHERE Nome ='".$_POST['Nome']."'") or die("erro ao selecionar");

$result=mysqli_fetch_row($pegaUf);

$pegaMunicipio = mysqli_query($connect,"SELECT Nome FROM Municipio WHERE UF = '".$result[0]."'") or die("erro ao selecionar");



foreach ($pegaMunicipio as $Municipio) 
{
$municiopUTF = utf8_decode($Municipio['Nome']);
	echo '<option>'.$municiopUTF.'</option>';# code...


}


?>