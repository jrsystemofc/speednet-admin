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

	echo "<h1>COLABORADOR</h1>";
	echo "<a href='../src/php/sair.php'>Sair</a>";
?>