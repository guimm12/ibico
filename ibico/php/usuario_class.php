<?php


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
 		private $nm_estado;
 		private $nm_cidade;
 		private $nm_bairro;




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
 			include("conexao.php");
 			
						$query = mysqli_query($conexao,"INSERT INTO tb_usuario(nm_nome,nm_sobrenome,cd_telefone_fixo,cd_telefone_movel,nm_email,sx_sexo,cd_senha) VALUES('$this->nm_nome','$this->nm_sobrenome','$this->cd_telefone_fixo','$this->cd_telefone_movel','$this->nm_email','$this->sx_sexo','$this->cd_senha')");
						$result = $conexao->query($query);
						
						// retornando ao sucesso no registro
						return $result;
					


 		}














 	}

	

?>