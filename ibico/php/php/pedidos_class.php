<?php
include_once("conexao_class.php");




	class pedido
	{
		private $cd_pedido;
		private $dt_criacao;
		private $nm_titulo;
		private $ds_pedido;
		private $cd_usuario;
		private $nm_estado;
		private $nm_cidade;
		private $nm_bairro;
		private $nm_categoria;
	







		public function pedido($nm_titulo,$ds_pedido,$cd_usuario,$nm_estado,$nm_cidade,$nm_bairro,$nm_categoria)
		{
          $this->nm_titulo=$nm_titulo;
          $this->ds_pedido=$ds_pedido;
          $this->cd_usuario=$cd_usuario;
          $this->nm_estado=$nm_estado;
          $this->nm_cidade=$nm_cidade;
          $this->nm_bairro=$nm_bairro;
          $this->nm_categoria=$nm_categoria;


 

		}


		public function AddPedido()
		{
		
		include("conexao.php");

		$query = mysqli_query($conexao,"INSERT INTO tb_pedido (dt_criacao, nm_titulo,  ds_pedido, cd_usuario, nm_estado, nm_cidade, nm_bairro, nm_categoria) values (NOW(),'$this->nm_titulo','$this->ds_pedido','$this->cd_usuario', '$this->nm_estado', '$this->nm_cidade', '$this->nm_bairro','$this->nm_categoria')");
		$result = $conexao->query($query);
		return $result;
		




		}

		public function VerificaPedido()
		{
			return"titulo: $this->nm_titulo - Desc: $this->ds_pedido - cd: $this->cd_usuario - estado: $this->nm_estado - cidade: $this->nm_cidade -  bairro: $this->nm_bairro - catego: $this->nm_categoria ";



		}



	}




?>