<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet"> 
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!--Import CSSs da pagina-->
</head>
<style type="text/css">
	body {
		display: flex;
		min-height: 100vh;
		flex-direction: column;
		background-color: #d1d1d1; 
	}
	main {
		flex: 1 0 auto;
	}
	fieldset{
		margin-top: 10vh;
		margin-bottom: 10vh;
		border-radius: 2vh;
		margin-left: 60vh;
		margin-right: 60vh;
	}
	#inp{
		width: 100%;
	}

	/*Sub atributos do input(Placeholder)
	::-webkit-input-placeholder {
	   color: green;
	}

	:-moz-placeholder {
	   color: green;
	}

	::-moz-placeholder {
	   color: green;  
	}

	:-ms-input-placeholder {  
	   color: green;  
	}*/

</style>
<body id="body">
	<?php
		require_once ('../html/header.html');
	?>
	<main>	
		<div id="login-screen" class="">
			<fieldset>
				<div class="row col m6 ">	
					<form method="POST" action="">
						<label>nome</label>
						<input id="inp" type="text" name="nome"><br />
						<label>senha</label>
						<input id="inp" type="password" name="senha">
						<!-- botão-->
						<input type="submit" class="btn blue-grey darken-1 waves-effect " value='go'>
						<!--/botão-->
					</form>
				</div>
			</fieldset>
		</div>
	</main>
	<script type="text/javascript" href="../js/materialize.min.js"></script>
	<?php
	require_once ('../html/footer.html');
	?>	
</body>
</html>