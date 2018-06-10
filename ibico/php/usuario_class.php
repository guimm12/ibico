<?php
include_once("conexao_class.php");

 // conecta-se automaticamente ao servidor MySQL

 	class usuario{

 		private $cd_usuario;
 		private $nm_nome;
 		private $nm_sobrenome;
 		private $cd_telefone_fixo;
 		private $cd_telefone_movel;
 		private $nm_email;
 		private $sx_sexo;
 		private $cd_senha;




 		public function usuario($nome,$sobrenome,$telefone_fixo,$telefone_movel,$email,$sexo,$senha)
 		{
 			$this->nm_nome=$nome;
 			$this->nm_sobrenome=$sobrenome;
 			$this->cd_telefone_fixo=$telefone_fixo;
 			$this->cd_telefone_movel=$telefone_movel;
 			$this->nm_email=$email;
 			$this->sx_sexo=$sexo;
 			$this->cd_senha=$senha;
 		}



 		public function AddUsuario()
 		{
 			 $My = new MySQLiConnection();
				if(isset($this->nm_nome,$this->nm_sobrenome,$this->cd_telefone_fixo,$this->cd_telefone_movel,$this->nm_email,$this->sx_sexo,$this->cd_senha) AND is_numeric($this->cd_telefone_movel) AND is_numeric($this->cd_telefone_fixo))
					{

						$sql_code = "INSERT INTO usuario(nome,sobrenome,email,sexo,telefone,celular,senha) VALUES('$this->nm_nome','$this->nm_sobrenome','$this->cd_telefone_fixo','$this->cd_telefone_movel','$this->nm_email','$this->sx_sexo','$this->cd_senha')";
						$result = $My->query($sql_code) or die(mysql_error());
						
						// retornando ao sucesso no registro
						return "4";
					}

	    

	  		  else{
	    	// retornando ao ajax checkd false
	    	  		 return "2";
	  			  }

 		}














 	}

	

?>