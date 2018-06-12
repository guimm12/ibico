<?php


   class anuncio {

   		private $cd_anuncio;
   		private $dt_criacao;
   		private $nm_titulo;
   		private $ds_anuncio;
   		private $cd_usuario;
   		private $nm_estado;
   		private $nm_cidade;
   		private $nm_bairro;




   		public function anuncio($nm_titulo,$ds_anuncio,$cd_usuario,$nm_estado,$nm_cidade,$nm_bairro)
   		{
   			$this->nm_titulo=$nm_titulo;
   			$this->ds_anuncio=$ds_anuncio;
   			$this->cd_usuario=$cd_usuario;
   			$this->nm_estado=$nm_estado;
   			$this->nm_cidade=$nm_cidade;
   			$this->nm_bairro=$nm_bairro;

   		}

   		public function AddAnuncio()
   		{
   			include_once("conexao.php");

   			$query = mysqli_query($conexao,"INSERT INTO tb_usuario(dt_criacao,nm_titulo,ds_anuncio,cd_usuario,nm_estado,nm_cidade,nm_bairro) VALUES (NOW(),'$this->nm_titulo','$this->ds_anuncio','$this->cd_usuario','$this->nm_estado','$this->nm_cidade','$this->nm_bairro')");
   			$result = $conexao->query($query);
			return $result;



   		}






   }




?>