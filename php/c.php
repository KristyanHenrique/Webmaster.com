<?php 

	require_once 'functions.php';
	$nome=$_POST['nome'];
	$senha=$_POST['senha'];
	login($nome,$senha);
	$sessao=retLogin();

	var_dump($sessao);
?>