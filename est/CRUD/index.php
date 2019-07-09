<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body class="grey lighten-2">
	<!--Header-->
	<header>
	    <div id="header" class="navbar-fixed">
	        <nav>
	            <div class="nav-wrapper grey darken-2">
	            <a id="logo" href="../index.php" class="brand-logo"><i id="logo" class="material-icons">developer_mode</i>WebMaster.com</a>
	                <ul id="nav-mobile" id="menu" class="right hide-on-med-and-down">
	                    <li><a href="php/cadastro.php">Criar</a></li>
	                    <li><a href="php/sUpload.php">Verificar</a></li>
	                    <li><a href="php/sUpload.php">Atualizar</a></li>
	                    <li><a href="php/sUpload.php">Apagar</a></li>
	                </ul>
	            </div>
	        </nav>
	    </div>
	</header>
	<!--<?php
		//require_once 'html/header.html';
	?>-->
	<fieldset style="border-radius: 5px; margin-top: 2%; margin-bottom: 3%; margin-left: 5%; margin-right: 5%;">
		<div id='row' class="row">
			<!--Cadastro-->
			<div class="col s3">
				<div class="card">
					<div class="card-image">
						<img src="img/Create.jpg">
						<span class="card-title"></span>
					</div>
					<div class="card-content grey lighten-3">
						<p>Cadastrar dados.</p>
					</div>
					<div class="card-action grey lighten-3">
						<a href="php/cadastro.php">Cadastre!</a>
					</div>
				</div>		
			</div>

			<!--Ler-->
			<div class="col s3 ">
				<div class="card">
					<div class="card-image">
						<img src="img/Read.jpg">
						<span class="card-title"></span>
					</div>
					<div class="card-content grey lighten-3">
						<p>Verificar Cadastros.</p>
					</div>
					<div class="card-action grey lighten-3">
						<a href="!#">Leia!</a>
					</div>
				</div>		
			</div>

			<!--Atualizar-->
			<div class="col s3 ">
				<div class="card">
					<div class="card-image">
						<img src="img/Update.jpg">
						<span class="card-title"></span>
					</div>
					<div class="card-content grey lighten-3">
						<p>Atualizar Cadastros.</p>
					</div>
					<div class="card-action grey lighten-3">
						<a href="!#">Atualize!</a>
					</div>
				</div>		
			</div>

			<!--Deletar-->
			<div class="col s3 ">
				<div class="card">
					<div class="card-image">
						<img src="img/Delete.jpg">
						<span class="card-title"></span>
					</div>
					<div class="card-content grey lighten-3">
						<p>Deletar Cadastros.</p>
					</div>
					<div class="card-action grey lighten-3">
						<a href="!#">Apague!</a>
					</div>
				</div>		
			</div>
		</div>
	</fieldset>
	<!--EOL(End Of Line)-->

	<!--Rodapé-->
	<footer class="page-footer grey darken-1" style="margin-bottom: 0%;">
	    <div class="container">
	        <div class="row">
	        	<div class="col l6 s12">
	          		<h5 class="black-text">WebMaster.com</h5>
	          		<p class="grey-text text-lighten-4">CRUD desenvolvido por Kristyan Henrique, técnico em TI e estudante de Análise e Desenvolvimento de Sistemas.</p>
	        	</div>
	        	<div class="col l4 offset-l2 s12">
	          		<h5 class="black-text">Links</h5>
	          		<ul>
	            		<li><a class="grey-text text-lighten-3" href="php/cadastro.php">Criar</a></li>
	            		<li><a class="grey-text text-lighten-3" href="#!">Verificar</a></li>
			            <li><a class="grey-text text-lighten-3" href="#!">Atualizar</a></li>
			            <li><a class="grey-text text-lighten-3" href="#!">Apagar</a></li>
	    		      </ul>
	        	</div>
	      	</div>
	    </div>
	    <div class="footer-copyright">
	      	<div class="container">
	        	© 2019 Copyright...
	        	<a class="grey-text text-lighten-4 right" href="../index.php">Home</a>
	      	</div>
	    </div>
	</footer>
</body>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</html>
