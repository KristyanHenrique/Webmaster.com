<!DOCTYPE html>
<html>
<head>
	<title>WebMaster.com</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet"> 
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!--Import CSSs da pagina-->
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/sTeste.css">
</head>
<body id=body>
	<?php 
		require_once '../html/headerD.html';
	?>
	<div>
		<div>
			<fieldset id="arqui">
				<form method="POST" id="form" action="../est">
					<label>Usuário</label>
					<input type="text" name="nome">
					<label>Senha</label>
					<input type="password" name="senha">
					<input type="submit" name="manda">
					<?php
						require_once 'functions.php';
						loginGambiarra();
					?>
				</form>
			</fieldset>
		</div>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php 
	require_once '../html/footer.html';
?>