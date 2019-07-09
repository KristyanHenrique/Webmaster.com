<!DOCTYPE html>
<html>
<head>
	<title>Cadastre!</title>
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
</head>
<body class="grey lighten-2">
	<!--Header-->
	<header>
	    <div id="header" class="navbar-fixed">
	        <nav>
	            <div class="nav-wrapper grey darken-2">
	            <a id="logo" href="../index.php" class="brand-logo"><i id="logo" class="material-icons">developer_mode</i>WebMaster.com</a>
	                <ul id="nav-mobile" id="menu" class="right hide-on-med-and-down">
	                    <li><a href="../index.php">Home</a></li>
	                    <li><a href="php/sUpload.php">Verificar</a></li>
	                    <li><a href="php/sUpload.php">Atualizar</a></li>
	                    <li><a href="php/sUpload.php">Apagar</a></li>
	                </ul>
	            </div>
	        </nav>
	    </div>
	</header>

	<!--Início do formulário-->
	<fieldset style="margin: 5% 10% 5% 10%;">
		<form style="margin: 5% 10% 5% 10%;" method="POST" action="verificar.php">
			<label>Nome</label>
			<input type="text" name="nome">

			<label>Senha</label>
			<input type="password" name="senha">

			<label>E-mail</label>
			<input type="email" name="email">

			<label>Telefone</label>
			<input type="number" name="telefone">

			<label>CPF</label>
			<input type="number" name="cpf">

			<button class='grey darken-1 waves-effect waves-light btn' style="margin: 5% 0% 0% 83%;" onclick="">
				<i class = 'material-icons right'>
					send
				</i>
				Enviar
			</button>

		</form>
	</fieldset>
	<!--Fim do formulário-->

	<!--footer-->
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
	            		<li><a class="grey-text text-lighten-3" href="../index.php">Home</a></li>
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
	<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>