<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if((isset ($_SESSION['email']) == false) and (isset ($_SESSION['senha']) == false))
{
    
   header('location:../ibico/index.html');
    }

$logado = $_SESSION['nome'];

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
					<li><a href="meusanuncios.html">Meus anúncios</a></li>
					<li><a href="anuncios.html">Encontre anúncios</a></li>
					
					
					</ul>
					
					
					<!-- Estrutura Dropdown de Pedidos - Dropdown Structure -->
					<ul>
					<ul id='anuncios-dropdown' class='dropdown-content'>
					<li><a href="meuspedidos.html">Meus pedidos</a></li>
					<li><a href="anuncios.html">Encontre pedidos</a></li>
										
					</ul>
					
					
						<!-- Estrutura Dropdown de Avaliações - Dropdown Structure -->
					<ul>
					<ul id='avaliacoes-dropdown' class='dropdown-content'>
					<li><a href="anuncios.html">Minhas Avaliações</a></li>
					<li><a href="avaliacoes.html">Avaliações de Profissionais</a></li>
					
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
		   <li class="tab"><a class="blue-text text-blue center-align" href="#cardmeuspedidos">Anúncios</a></li>
		  
           </ul>
		</div>
		
		
			
		
 <!-- CARD - BUSCAR ANÚNCIOS- GUIA ANÚNCIOS(CRIADO UM CARD COM OS DADOS DE BUSCA) --> 
  

  <div id="cardmeuspedidos" class="card-panel z-depth-5 col s12 m12 light-blue">
	
		<h4 class="white-text text-blue center-align" >Meus anúncios</h4>	 
		
		
		<div class="collection">
        <a href="#!" class="collection-item active">Serviços de Manutenção de Hardware</a>
        <a href="#!" class="collection-item">Desenvolvo Sites Responsivos</a>
        <a href="#!" class="collection-item">Realizo Técnicas de SEO, alavanque seu site!</a>
        <a href="#!" class="collection-item">Formatação completa com backup por 50 reais!</a>
		<a href="#!" class="collection-item">Vendo notebooks em ótimo estado!</a>
        <a href="#!" class="collection-item">Orçamento de Estrutura de Redes</a>
		<a href="#!" class="collection-item">Desenvolvo aplicativos móveis</a>
      
		
       
		
      </div>
		
		
		
      
	  
	  
 
				</div><!--card-->
				</div><!--col-->
				
				
	<!-- Os cards de Meus Pedidos -->
				
					<!-- <div class="col s9 13">
									<div id="cardexibir" class="card-panel z-depth-5"> -->
						
						
			<!--<div id="card-widgets"> -->
             
				<!-- Arrumar COL para responsividade futura, tá dando pal em modo responsivo -->
				
                 <div class="col s5">
				  <ul id="task-card" class="collection with-header">
                    
					<li class="collection-header light-blue">
								
								
								<div id="profile-card" class="card">
                                    
									<div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="img/hardware.png" alt="user background">
                                    </div>
                                    
									
									<div class="card-content">
                                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                         <i class="mdi-action-account-circle"></i>
                                        </a>

                                        <span class="card-title activator grey-text text-darken-4">Serviços de Manutenção de Hardware</span>
										
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Alberto</p>
										
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i>albertinho@hotmail.com</p>

                                    </div>
                                    
									<div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Alberto<i class="mdi-navigation-close right"></i></span>
										
										 <img src="img/avatar1.jpg" alt="" class="circle responsive-img activator card-profile-image">
                                        <p>Realizo serviços gerais de informática.</p>
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Alberto Ferreira</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> albertinho@hotmail.com</p>
                                        <p><i class="mdi-image-navigate-next cyan-text text-darken-2"></i>Categoria: Informática</p>
                                        <p><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: São Vicente - SP</p>
										<p><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Vila Cascatinha</p>
										
										<button class="btn blue" type="submit" name="action">Editar
										</button>
		
										<button class="btn blue" type="submit" name="action">Excluir
										</button>
                                    </div>
                                </div>
					  </li>
                      
                 </div>
               	
				
				<!-- Segundo CARD de Teste --> 
				
				 <div class="col s12 m6 l4">
				  <ul id="task-card" class="collection with-header">
				
                    <li class="collection-header light-blue">
					
                                <div id="profile-card" class="card">
								<h4 class="blue-text text-blue center-align" >Notificações</h4>	 
                                   
					<ul class="collapsible">
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Luconi demonstrou interesse
					<span class="badge">1</span></div>
					
					<div class="collapsible-body">	
						
						<!--
					<ul><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>José Carlos</ul>
					
                    <ul><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6099</ul>
                    <ul><i class="mdi-communication-email cyan-text text-darken-2"></i> vinicius@hotmail.com</ul>
                    <ul><i class="mdi-image-navigate-next cyan-text text-darken-2"></i>Categoria: Reformas e Serviços Gerais</ul>
                    <ul><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: Santos - SP</ul>
					<ul><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Gonzaga</ul> 
					-->
					 <ul>
					 
					 <!-- Estrutura das estrelas de avaliação --> 
					 
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
					
					 <li><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Luconi
					
					
                    <li><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> (13) 99163-6098</li>
                    <li><i class="mdi-communication-email cyan-text text-darken-2"></i> luconi@hotmail.com</li>
                    <li><i class="mdi-social-location-city cyan-text text-darken-2"></i>Cidade: Praia Grande - SP</li>
					<li><i class="mdi-social-location-city cyan-text text-darken-2"></i>Bairro: Guilhermina</li> 
					</ul>
					<!-- Fechando div collap body ***não mexer** </div> -->
					
					</li>
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Evandro demonstrou interesse
					<span class="badge">1</span></div>
					<div class="collapsible-body"><p>Evandro necessita do seu serviço Alberto!</p></div>
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Lucas demonstrou interesse
					<span class="badge">1</span></div>
				
				
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Guilherme demonstrou interesse
					<span class="badge">1</span></div>
					
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Paulo demonstrou interesse
					<span class="badge">1</span></div>
					
					</li>
					
					<li>
					<div class="collapsible-header">
					<i class="material-icons">account_box</i>
					Murilo demonstrou interesse
					<span class="badge">1</span></div>
				
					</div>
					</li>
					</ul>
									
                                    </div>
                                </div>
                            </div>

							
								


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
