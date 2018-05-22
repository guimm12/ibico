
<?php
// Conexão com o banco de dados
// Selecionando banco
include_once("conexao.php");
 
// Recuperamos a ação enviada pelo formulário
$a = $_GET['a'];
 
// Verificamos se a ação é de busca
if ($a == "buscar") {
 
	// Pegamos a palavra
	$palavra = trim($_POST['palavra']);
 
	// Verificamos no banco de dados produtos equivalente a palavra digitada
	$sql = mysql_query("SELECT * FROM produtos WHERE nome LIKE '%".$palavra."%' ORDER BY nome");
 
	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql);
 
	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		while ($produto = mysql_fetch_object($sql)) {
			echo $produto->nome . " (R$ ".$produto->valor.") <br />";
		}
	// Se não houver registros
	} else {
		echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
	}
?php>

?>