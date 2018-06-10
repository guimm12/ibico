<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if((isset ($_SESSION['email']) == false) and (isset ($_SESSION['senha']) == false))
{
    
   header('location:../ibico/index.html');
    }

$logado = $_SESSION['Nome'];

?>



	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- Titulo que fica na guia superior --> 
	<title>IBico Solutions</title>

	
	 <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Folha de Estilo - Stylesheet -->
    <link href="css/gallery-materialize.min.css" rel="stylesheet">

    <!-- Materiais de Icone - Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
			<!-- CSS  -->
			<link href="min/plugin-min.css" type="text/css" rel="stylesheet">
			<link href="min/custom-min.css" type="text/css" rel="stylesheet">
			<script src="js/funcoes.js"></script>
		</head>


	<body id="top" class="scrollspy">

		<!-- Pré - Carregamento - Pre Loader -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		 
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		 
		</div>

<!-- Barra de Navegação -->

 <div class="navbar-fixed">
    <nav id="nav_f" class="blue lighten-1" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
           
		   <a href="#" id="logo-container" class="brand-logo">IBico</a> 
		   
		   <!-- <img src="img/logo.png" widht="62px" height="62px"></a> -->
                <ul class="right hide-on-med-and-down">
				    
					<li><a href="index.html">Home</a></li>
					<li><a class='dropdown-button' href='#anuncios' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Anúncios<i class="material-icons right">arrow_drop_down</i></a></li>
					
					<li><a class='dropdown-button' href='#pedidos' data-activates='anuncios-dropdown' data-belowOrigin="true" data-constrainWidth="false">Pedidos<i class="material-icons right">arrow_drop_down</i></a></li>
					
				    <li><a class='dropdown-button' href='#avaliacoes' data-activates='avaliacoes-dropdown' data-belowOrigin="true" data-constrainWidth="false">Avaliações
					
					<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a href="sobrenos.php">Sobre nós</a></li>
 
					<!-- ícone "cabeça de login" lado direito  -->
					
					<ul class="right hide-on-med-and-down">
					<li>
					<a class='right dropdown-button' href='#logar' data-activates='user_dropdown' data-belowOrigin="true" data-constrainWidth="false"><i class='material-icons'>account_circle</i></a>
					</li>
	                </ul>

					<!-- Lista dentro da cabeça de Login -->
		
					<ul class="dropdown-content" id="user_dropdown">	
					
					<li><a class="modal-trigger" href="#modalmeuperfil">Meu Perfil</a>

        			<!-- class = indigo - text --> 
					<li><a class="" href="#!">Ajustes</a></li>
					
				    <li><a class="modal-trigger" type="submit" name="action" href="../ibico/php/finalizaSessao.php">Sair</a>	
				    </ul>
					

					<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
					</div>
	
				<!-- Estrutura Dropdown de Anúncios (o que vem depois que você clica em anúncios/pedidos/avaliações - Dropdown Structure -->
					<ul>
					<ul id='feature-dropdown' class='dropdown-content'>
					<li><a href="meusanuncios.php">Meus anúncios</a></li>
					<li><a href="anuncios.php">Encontre anúncios</a></li>
					<!-- <li><a href="cadastroanuncio.html">Criar anúncio</a></li> -->
					
					</ul>
					
					
					<!-- Estrutura Dropdown de Pedidos - Dropdown Structure -->
					<ul>
					<ul id='anuncios-dropdown' class='dropdown-content'>
					<li><a href="meuspedidos.php">Meus pedidos</a></li>
					<li><a href="pedidos.php">Encontre pedidos</a></li>
					<!--<li><a class="modal-trigger" type="submit" name="action" href="#modalcriarpedido">Criar pedido</a></li> -->
					
					</ul>
					
					
						<!-- Estrutura Dropdown de Avaliações - Dropdown Structure -->
					<ul>
					<ul id='avaliacoes-dropdown' class='dropdown-content'>
					<li><a href="meuperfil.php">Minhas Avaliações</a></li>
					<li><a href="avaliacoes.php">Avaliações de Profissionais</a></li>
					
					</ul>

					
				<!-- Construção para Mobile - Responsivo, quando você diminui a página ele aparece 3 traços pra exibir o menu (Em construção) --> 
				
                <ul id="nav-mobile" class="side-nav">
											 
				<li><a href="index.html">Home</a></li>
				<li><a href="anuncios.php">Anúncios</a></li>	
				<li><a href="pedidos.php">Pedidos</a></li>	
				<li><a href="sobrenos.php">Sobre nós</a></li>
				<li><a href="#logar">Sair</a></li>				
					
				</ul>
				
                <!-- Os 3 traços -->
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			   
			
			</div>
        </div>
    </nav>
</div>
				
				 <!-- Estrutura - MEU PERFIL -->
	  
    
   <div class="row">
        <div class="container">
         
		  <div class="row">
				<div class="input-field col s12 l6">
				
				
				<!-- <img class="user.png" src="cool_pic.jpg"> -->
				
				<img src="img/user1.png" widht="200px" height="170px"></a>
				
				
					<div class="file-field input-field">
						<div class="btn blue">
						<span>Editar Imagem</span>
						<input type="file" name="image">
					</div> 
					
					</div>
					
			<div class="input-field col s12 m6 12">
					
			
		    <a href="javascript:void(0)" onclick="Avaliar(1)">
			<img src="img/star0.png" id="s1"></a>

			<a href="javascript:void(0)" onclick="Avaliar(2)">
			<img src="img/star0.png" id="s2"></a>

			<a href="javascript:void(0)" onclick="Avaliar(3)">
			<img src="img/star0.png" id="s3"></a>

			<a href="javascript:void(0)" onclick="Avaliar(4)">
			<img src="img/star0.png" id="s4"></a>

			<a href="javascript:void(0)" onclick="Avaliar(5)">

			<img src="img/star0.png" id="s5"></a>
					
		     <h5 class="header text_h2">Avaliação: <a id="rating" class="center header text_h2">0<a/></h5>
					
			</div>
			
			
			</div>
				
				
				
                </div>
				
			
			<div class="row">

         <form name="cdUsuario" class="cadastroUsuario">
              <div class="row">
                <div class="input-field col s12 l6">
					<i class="mdi-action-account-circle prefix"></i> 
                  <input id="nome" name="nome" type="text">
				  
                  <label for="nome">Primeiro Nome</label>
                </div>
                <div class="input-field col s12 l6">
                  <input id="sobrenome" required name="sobrenome" type="text">
                  <label for="sobrenome">Sobrenome</label>
                </div>
              </div>
              <div class="row">

                <div class="input-field col s12 l6">
				<i class="mdi-communication-email prefix"></i>
                  <input id="email"  required name="email" type="email" class="validate">
                  <label for="icon_email" data-error="Incorreto" data-success="Válido">E-mail</label>
                </div>
                <div class="input-field col s12 l6">
                  <p>
                    <input required name="sexo" type="radio" id="rd_masculino"/>
                    <label for="rd_masculino">Masculino</label>
                    <input required name="sexo" type="radio" id="rd_feminino" />
                    <label for="rd_feminino">Feminino</label>
                  </p>
                </div>
              </div>
             
              <div class="row">
                <div class="input-field col s12 l6">
				<!-- Máximo de 11 caracteres, o suficiente para um número padrão DDD + número, exemplo: 13991636095 -->
                 <i class="mdi-communication-call prefix"></i> 
				  <input id="telefone"  name="telefone" type="text" maxlength="11"> <!-- minlength="11" -->
				 
                  <label for="telefone">Telefone</label>
                </div>
				
                <div class="input-field col s12 l6">
				  <i class="mdi-hardware-phone-iphone prefix"></i>
                  <input id="celular" required name="celular" type="text" maxlength="11">
                  <label for="senha">Telefone Celular</label>
				
                </div>
				
				
				 <div class="input-field col s12 l6">
				  <i class="mdi-action-https prefix"></i>
                  <input id="password" required name="senha" type="password" class="validate">
                  <label for="senha">Senha de Acesso</label>
				
                </div>

				<div class="input-field col s12 16">
                        <input type="checkbox"  name="perfilprofissional" id="perfilprofissional" value="aceito" class="filled-in chk-col-pink">
                        <label for="perfilprofissional">Perfil Profissional</label>
                    </div>

              </div>
              
				
					<div class="row">
					     <div class="input-field col s12 l6"> 							
             
               <select class = "browser-default">
                    <option value = "" disabled selected>Área de Atuação</option>
                  <option value = "1">Informática</option>
                  <option value = "2">Aparelhos Eletrônicos e Eletrodomésticos</option>            
				  <option value = "3">Aulas</option>
				  <option value = "4">Autos</option>
				  <option value = "5">Consultoria</option>
				  <option value = "6">Eventos</option>
				  <option value = "7">Moda e Beleza</option>
				  <option value = "8">Reformas e Serviços Gerais</option>
				  <option value = "9">Saúde</option>
				  <option value = "10">Serviços Domésticos</option>
				  <option value = "11">Comércio</option>
				  <option value = "12">Esportes e Lazer</option>
               </select>
            </div>
				
				<div class="input-field col s12 l6">
				<i class="mdi-action-wallet-travel prefix"></i>
                  <input id="email" type="email"  name="Ped_email">
                  <label for="icon_email" data-error="Incorreto" data-success="Válido">Formação</label>
                </div>

				</div>	
					
					 <!-- TextArea Observações do meu perfil profissional --> 
               <div class="row">
          <div class="input-field col s12 16">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Observações</label>
          </div>
        </div>
				<!-- <a href="javascript:void(0);">Meus anúncios</a></label>
				
				<a href="javascript:void(0);">Meus pedidos</a></label> -->
              </div>
					
					
					<button class="btn blue center-align" type="submit" name="action" >Salvar
		
					</button>
					
					<button class="btn blue center-align" type="submit" name="action" >Editar Dados
		
					</button>
	
	
					<!-- Loader AJAX --> 
					<font color="red"<p><center><h7 class="emailCadastrado"></h7></center></p></font>
              	<font color="green"<p><center><h7 class="sucessoCadastro"></h7></center></p></font>

              
          
          </div>
        </div>
	</div>
      
	  
	  
		</form>
        <!-- Outro tipo de efeito no botão de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
    
    </div>
	 </div>
		


 <!-- Estrutura Modal - EXIBE O CADASTRO DE PEDIDO  -->
<form class="col s12" name=criaPedido action="../ibico/php/insere_pedido.php" method="post"> 
    <div id="modalcriarpedido" class="modal modal-fixed-footer"> <!-- Rodapé Fixo -->
      <div class="modal-content">
        <div class="container">
         
           
          <div class="row">
            <form class="col s12">
              <div class="row">
		 
                <div class="input-field col s12 l6">
					
                  <input id="title"  name ="Ped_title" type="text" required>
				  
                  <label for="title">Titulo do pedido</label>
                </div>
                
              <div class="row">

                <div class="input-field col s12 l6">
				<i class="mdi-communication-email prefix"></i>
                  <input id="email" type="email"  name="Ped_email" class="validate" required>
                  <label for="icon_email" data-error="Incorreto" data-success="Válido">E-mail</label>
                </div>
                
              </div>
             
              <div class="row">
                <div class="input-field col s12 l6">
				<!-- Máximo de 11 caracteres, o suficiente para um número padrão DDD + número, exemplo: 13991636095 -->
                 <i class="mdi-communication-call prefix"></i> 
				  <input id="input_text" type="text" name="Ped_telefone" maxlength="11"> <!-- minlength="11" -->
				 
                  <label for="telefone">Telefone para contato</label>
                </div>
				
				
				<div class="row" onload=""?>
                <div class="input-field col s12 l6"> 
  
				  <select name="Ped_estado" id ="estado" class = "browser-default"> 

				  	<?php
				  		$connect = mysqli_connect('localhost:3306','root','');
 						$db = mysqli_select_db($connect,'ibico');
				  		$sql_code = mysqli_query($connect,"SELECT Id, Nome, UF FROM Estado order by Nome ASC") or die("erro ao selecionar");
				  		foreach ($sql_code as $estado) 
				  		{
				  		echo'<option value ="'.$estado['Nome'].'">'.$estado['Nome'].'</option>';

				  		}
				  	?> 
               </select>
                </div>
			  </div>
			   
			   
			  <!-- <label for="estado">Estado</label> -->
			   
				
				<div class="input-field col s12 l6">
					<div class="row">
				 <select name="Ped_municipio" id="municipios" class = "browser-default">

				 <script>
				 	
						$("#estado").on("change", function(){

						var idEstado = $("#estado").val();
						$.ajax({
							url:'../ibico/php/carregaMunicipios.php',	
							type: 'POST',
							data: {Nome : idEstado},
							beforeSend: function(){
								
								$("#municipios").html("Carregando..");
							},
							success: function(retorno)
							{
								
								alert(retorno);

								$("#municipios").html(retorno);
							},
							error: function(retornoErro)
							{
								
								 alert(retornoErro);
								$("#municipios").html("Houve um erro ao carregar!");
							}
						});

						});
				</script>
			  
				
					  <!-- <select name="Ped_municipio" class = "browser-default" required> -->
	                <!--   <option value = "" selected>Selecione a cidade</option>	-->	 
	               </select>
	                </div>			  
                </div>
				

				  <div class="input-field col s12 l6">
					
					  <input id="title"  name ="Ped_bairro" type="text" required>
				  
					<label for="title">Bairro</label>	 
	               </select>
				
					</div>
			  
			
                <div class="input-field col s12">
               <select  name="Ped_categoria" class = "browser-default" required>
                    <option value = ""  selected>Selecione uma categoria</option>
                  <option value = "1">Informática</option>
                  <option value = "2">Aparelhos Eletrônicos e Eletrodomésticos</option>            
				  <option value = "3">Aulas</option>
				  <option value = "4">Autos</option>
				  <option value = "5">Consultoria</option>
				  <option value = "6">Eventos</option>
				  <option value = "7">Moda e Beleza</option>
				  <option value = "8">Reformas e Serviços Gerais</option>
				  <option value = "9">Saúde</option>
				  <option value = "10">Serviços Domésticos</option>
				  <option value = "11">Comércio</option>
				  <option value = "12">Esportes e Lazer</option>
               </select>
			   
		
				</div> 
			
			
			 <div class="input-field col s12 16">
            <textarea id="textareadescricao" class="materialize-textarea" data-length="120"></textarea>
            <label for="textareadescricao">Descreva seu pedido</label>
          </div>
		  
			 
			
				<div class="input-field col s12 l6">
            <div class="file-field input-field">
                <div class="btn blue">
                    <span>Adicionar Imagem</span>
                    <input type="file" name="image">
                </div> 
            </div>
        </div>

				<!-- Caminho da Imagem <div class="file-path-wrapper">
                    <input type="text" class="file-path" placeholder="Escolha uma Imagem">
                </div> -->
	</div>
	    
			 
			 <!--<div class="input-image-flash-on col s12 l6">
				<button class="btn waves-effect waves-light center blue" type="submit" name="action">Adicionar Imagem
				</button>
				</div> -->
			  	  
		</div>	
    </form>
          </div>
        </div>
      </div>
      
      
	  <div class="modal-footer">
	  <!-- btn waves-effect waves-light center -->
	  
	  <button class="btn blue" type="submit" name="action">Cadastrar Pedido
		<!-- logotipo de sair <i class="fa fa-sign-in right"></i> -->
		</button>
        <!-- Outro tipo de efeito no botão de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
      </div>
    </div>
	 </div>


	 
<!-- Fim do cadastro de pedido -->
	
    
	
	
	
	
	

	
	 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


<!--Rodapé -->

<footer id="contatorodape" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contatorodape.php" method="post">
				 <h5 class="white-text">Envie-nos uma mensagem</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Mensagem</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Enviar
                               <!-- <i class="mdi-content-send right white-text"></i> -->
                            </button>
                        </div>
                    </div>
                </form>
            </div>
           


		   <div class="col l3 s12">

				<h5 class="white-text">IBico Solutions</h5>
                <ul>
                    <li><a class="white-text" href="index.html">Home</a></li>
                   <!-- <li><a class="white-text" href="http://www.X">Blog</a></li> -->
                </ul>
			</div>
			
			
			
            <div class="col l3 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/donluconi">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.ibico.com.br">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	
	
	
    <div class="footer-copyright default_color">
        <div class="container">
            Todos os direitos reservados <a class="white-text" href="http://ibico.com.br">IBico Solutions</a>.  <a class="white-text" href="http://cbt.ifsp.edu.br">IFSP Campus Cubatão</a>
        </div>
    </div>
</footer>




    <!--  Scripts -->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	<script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
	<script src="js/ion.rangeSlider.js"></script>
	
	

    </body>
</html>
