<?php

/*
   Classe para conexão com banco de dados MySQL usando a extensão MySQLi, disponível a partir do PHP 5.
   A classe contém o construtor de conexão, registrando os possíveus erros de conexão no arquivo db_errors.log, e o destrutor, para fechar a conexão. As demais fgunções de banco de dados são padrões da classe myslqi, devendo ser usadas, por exemplo, desta forma:
   
    $My = new MySQLiConnection();
    $My->query();


   Caso você não tenha um arquivo de inicialização que defina as constantes para conexão com o banco de dados e o caminho para o diretório dos arquivos de logs de erro, descomente a parte do código que usa a função define() e configure-a com as informações para conexão.

*/

// Constantes paea conexão com o banco de dados:

define ("DB_SERVIDOR", "localhost");
define ("DB_USUARIO", "root");
define ("DB_SENHA", "");
define ("DB_NOME", "db_ibico");
define ("LOGS_PATH", "logs/");



class MySQLiConnection extends mysqli
{
    public function __construct()
    {
        try
        {
            //@mysqli_connect (DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);
            parent::__construct (DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);
            if (mysqli_connect_errno() != 0)
                throw new Exception (mysqli_connect_errno() . " - " . mysqli_connect_error());
        }
        catch (Exception $db_error)
        {
            $mensagem = $db_error->getMessage();
            $arquivo = $db_error->getFile();
            $data = date ("Y-m-d H:i:s");
            $ip_visitante = $_SERVER['REMOTE_ADDR'];
            
            if (!file_exists (LOGS_PATH))
                mkdir (LOGS_PATH);
            
            // mensagem que será salva no arquivo de logs do banco de dados
            $log = $data . " | " . $mensagem . " | " . $arquivo . " | " . $ip_visitante . "\r\n\r\n";
            error_log ($log, 3, LOGS_PATH . "db_errors.log");
            echo "Erro ao conectar ao banco de dados MySQL. O erro foi reportado e o administrador do sistema tomará as devidas providências.";
            exit;
            
        }
    }
    
    
    public function __destruct()
    {
        if (mysqli_connect_errno() == 0)
            $this->close();
    }
    
}

?>