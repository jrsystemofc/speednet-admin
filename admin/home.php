<?php
	session_start();
		if((!isset ($_SESSION['usuarioEmail']) == true) and (!isset ($_SESSION['usuarioNome']) == true))
	{
	  unset($_SESSION['usuarioEmail']);
	  unset($_SESSION['usuarioNome']);
	  header('location:../login.php');
	  }

	$logado = $_SESSION['usuarioNome'];
	include_once("../src/php/conexao.php");	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8"/>

		<title></title>


		<!-- Estilização -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Font Awesome JS -->
    	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
	</head>
	<body>
		<div class="wrapper">
	        <!-- Sidebar  -->
	        <nav id="sidebar">
	            <div class="sidebar-header">
	                <h3 class="title">GRUPO SOTT</h3>
	            </div>

	            <ul class="list-unstyled components">
	                <p class="text-center"><?php echo $_SESSION['usuarioNome']; ?></p>
	                <li>
	                	<a href="home.php"><i class="fas fa-home"></i> Página Inicial</a>
	                </li>
	                <li class="active">
	                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Clientes</a>
	                    <ul class="collapse list-unstyled" id="homeSubmenu">
	                        <li>
	                            <a href="pags/adicionar_clientes.php"><i class="fas fa-circle"></i> Adicionar Clietnes</a>
	                        </li>
	                        <li>
	                            <a href="pags/listar_clientes.php"><i class="fas fa-circle"></i> Listar Clientes</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="active">
	                    <a href="#homeS1ubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-archive"></i> Planos</a>
	                    <ul class="collapse list-unstyled" id="homeS1ubmenu">
	                        <li>
	                            <a href="pags/adicionar_planos.php"><i class="fas fa-circle"></i> Adicionar Planos</a>
	                        </li>
	                        <li>
	                            <a href="pags/listar_planos.php"><i class="fas fa-circle"></i> Listar Planos</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="active">
	                    <a href="#newsletter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-receipt"></i> Newsletter</a>
	                    <ul class="collapse list-unstyled" id="newsletter">
	                        <li>
	                            <a href="pags/listar_newsletter.php"><i class="fas fa-circle"></i> Listar Newsletter</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="active">
	                    <a href="#curriculos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-copy"></i> Curriculos</a>
	                    <ul class="collapse list-unstyled" id="curriculos">
	                        <li>
	                            <a href="pags/listar_curriculos.php"><i class="fas fa-circle"></i> Listar Curriculos</a>
	                        </li>
	                        <li>
	                        	<a href="pags/curriculos_aceitos.php"><i class="fas fa-circle"></i> Curriculos Aceitos</a>
	                        </li>
	                        <li>
	                        	<a href="pags/curriculos_rejeitados.php"><i class="fas fa-circle"></i> Curriculos Rejeitados</a>
	                        </li>
	                    </ul>
	                </li>
	                <li class="active">
	                    <a href="#config" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cog"></i> Configurações</a>
	                    <ul class="collapse list-unstyled" id="config">
	                        <li>
	                            <a href="pags/configs.php"><i class="fas fa-circle"></i> Informações do site</a>
	                        </li>
	                        <li>
	                        	<a href="pags/template.php"><i class="fas fa-circle"></i> Template</a>
	                        </li>
	                    </ul>
	                </li>
	                	
	            </ul>

	            <ul class="list-unstyled CTAs">
	                <li>
	                    <a href="../src/php/sair.php" class="download">SAIR</a>
	                </li>
	            </ul>
	        </nav>

	        <!-- Page Content  -->
	        <div id="content">

	            <nav class="navbar navbar-expand-lg navbar-light bg-light">
	                <div class="container-fluid">

	                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
	                        <i class="fas fa-align-left"></i>
	                    </button>

	                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                        <ul class="nav navbar-nav ml-auto">
	                            <li class="nav-item">
	                                <a class="nav-link" href="../src/php/sair.php">SAIR</a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </nav>

	            

	        </div>
	    </div>

	    <!-- jQuery CDN - Slim version (=without AJAX) -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    	<!-- Popper.JS -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    	<!-- Bootstrap JS -->
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</body>
</html>
