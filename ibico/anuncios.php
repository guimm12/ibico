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
			<link href="min/custom-min.css" type="text/css" rel="stylesheet" >
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
					
					<li><a href="meuperfil.php">Meu Perfil</a>

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
					
					
					</ul>
					
					
					<!-- Estrutura Dropdown de Pedidos - Dropdown Structure -->
					<ul>
					<ul id='anuncios-dropdown' class='dropdown-content'>
					<li><a href="meuspedidos.php">Meus pedidos</a></li>
					<li><a href="pedidos.php">Encontre pedidos</a></li>
										
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
				<li><a href="#anuncios">Anúncios</a></li>	
				<li><a href="#pedidos">Pedidos</a></li>	
				<li><a href="#contato">Sobre nós</a></li>
				<li><a href="#logar">Sair</a></li>				
					
				</ul>
				
                <!-- Os 3 traços -->
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			   
			
			</div>
        </div>
    </nav>
</div>
	
	
	<!-- Menu de Buscas (Anúncios e Pedidos - Home 2) -->
	
	
	
	
			<!-- BUSCAR ANÚNCIOS - GUIA ANÚNCIOS (CRIADO UM CARD COM OS DADOS DE BUSCA) -->
									
			
		<div class="row">
			<!-- <div class="col s12 m4 l3"> -->
			 <div class="col s12 m3">
			
		   <div class="nav-wrapper">
		   <ul class="tabs tabs-transparent">
		   <li class="tab"><a class="blue-text text-blue center-align" href="#cardpedidos">Anúncios</a></li>
		  
           </ul>
		</div>
		
		
			
		
 <!-- CARD - BUSCAR ANÚNCIOS- GUIA ANÚNCIOS(CRIADO UM CARD COM OS DADOS DE BUSCA) --> 
  

  <div id="cardpedidos" class="card-panel z-depth-5">
	
		<h4 class="blue-text text-blue center-align" >Buscar Anúncios</h4>	 
		
		
		<div class="row">
		<form class="col s12 m12">
		<div class="row">

		
      
	  
	  	<div class = "row">
               <label>Categoria</label>
               <select class = "browser-default">
                    <option value = "" disabled selected>Selecione uma Área</option>
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
	  
	  
	  
	  
	  
	  
	  
	  
			<div class = "row">
              
			  
			  <div class="col-xs-8 p-t-5">
					
					<input type="checkbox" name="checkboxempresa" id="checkboxempresa">
                     <label for="checkboxempresa">Empresa</label>
					 </div>
						
						 <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="checkboxautonomo" id="checkboxautonomo">
                            <label for="checkboxautonomo">Profissionais Autônomos</label>
                        </div>
	  
	   <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="checkboxcertificado" id="checkboxcertificado">
                            <label for="checkboxcertificado">Profissionais Certificados</label>
                        </div>
			  
            </div>
	
</div>
			

 
     
	
  </form>
  
	<button class="btn blue" type="submit" name="action">Pesquisar
		</button>
		
	</div>

		<button class="btn blue modal-trigger" type="submit" name="action" href="#modalcriaranuncio">Criar Anúncio
		</button>
 
				</div><!--card-->
				</div><!--col-->
				
				
	<!-- TODO CONTEÚDO GERADO PELA BUSCA PEDIDOS SERÁ EXIBIDO NESSE CARD -->
				
					<!-- <div class="col s9 13">
									<div id="cardexibir" class="card-panel z-depth-5"> -->
									
			<div id="card-widgets">
              <div class="row">
                 <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">Anúncio 01</h4>
                      <p class="task-card-date">27/05/18</p>
                    </li>
                    <li class="collection-item dismissable">
                       <!-- Colocar conteúdo --> 
                    </li>
					
					<li class="collection-item dismissable">
                     <!-- Colocar conteúdo --> 
                    </li>
					  
                      
                 </div>
               	
				
				<!-- Segundo CARD de Teste --> 
				
				 <div id="card-widgets">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">Anúncio 02</h4>
                      <p class="task-card-date">27/05/18</p>
                    </li>
                    <li class="collection-item dismissable">
                       <!-- Colocar conteúdo --> 
                    </li>
					
					<li class="collection-item dismissable">
                     <!-- Colocar conteúdo --> 
                    </li>
					
					
					  
                      
                 </div>
               	
               
			   <!-- Terceiro CARD de Teste --> 
			   
			   <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">Anúncio 03</h4>
                      <p class="task-card-date">27/05/18</p>
                    </li>
                    
					
					<li class="collection-item dismissable">
                       <!-- Colocar conteúdo -->
                    </li>
					  
					  <li class="collection-item dismissable">
                       <!-- Colocar conteúdo -->
                    </li>
                      
                 </div>
               	
				
				<!-- Quarto CARD de Teste -->
				
				 <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">Anúncio 04</h4>
                      <p class="task-card-date">27/05/18</p>
                    </li>
                    <li class="collection-item dismissable">
                       <!-- Colocar conteúdo --> 
                    </li>
					
					<li class="collection-item dismissable">
                     <!-- Colocar conteúdo --> 
                    </li>
					  
                      
                 </div>
               	
									
	</div><!--row-->
				
									

<!-- Segunda Div (não usada por enquanto)

<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            
            </div>
        </div>
    </div> -->





 <!-- Estrutura Modal - EXIBE O CADASTRO DE ANÚNCIO  -->
 
<form class="col s12" name=criaAnuncio action="../ibico/php/insere_pedido.php" method="post"> 
    <div id="modalcriaranuncio" class="modal modal-fixed-footer"> <!-- Rodapé Fixo -->
      <div class="modal-content">
        <div class="container">
         
           
          <div class="row">
            <form class="col s12">
              <div class="row">
		 
                <div class="input-field col s12 l6">
					
                  <input id="title"  name ="Ped_title" type="text" required>
				  
                  <label for="title">Titulo do anúncio</label>
                </div>
                
				
				
             
             
              <div class="row">
                <div class="input-field col s12 l6">
				
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
				  	    $estadoUTF = utf8_encode($estado['Nome']);
				  		echo'<option value ="'.$estadoUTF.'">'.$estadoUTF.'</option>';

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
								
								

								$("#municipios").html(retorno);
							},
							error: function(retornoErro)
							{
								
								 
								$("#municipios").html("Houve um erro ao carregar !");
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
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Descreva seu anúncio</label>
            <h7><b>Exemplo:</b> formação acadêmica, certificações, tempo de experiência.</h7>

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
	  
	  <button class="btn blue" type="submit" name="action">Criar Anúncio
		<!-- logotipo de sair <i class="fa fa-sign-in right"></i> -->
		</button>
        <!-- Outro tipo de efeito no botão de Registrar <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Registrar</a> -->
      </div>
    </div>
	 </div>


	 
<!-- Fim do cadastro de anúncio -->
	
    
	
	
	
	
	
	
	
	
	 
	
	
	
	
	
	
	
	
	
	
	
	
	
	


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
