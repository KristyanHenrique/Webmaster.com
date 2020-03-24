<!DOCTYPE html>
<html>
<head>
	<title>WebMaster.com</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/sUpload.css">
</head>
<body id="body">
	<?php
	require_once '../html/header.html';
	?>
	<main>
		<div>
			<div>
				<div id='cabecalho' class="card-panel blue-grey">
					Envie seus arquivos
				</div>
			</div>
			<div class="row" >
				<fieldset id="form">
					<form action='' enctype='multipart/form-data' method='POST'>
						<div id="pasta" class="col s6">
							<label for="first_name">Nome</label>
							<input type="text"  placeholder="Seu NomeSobrenome" name="pasta">
						</div>
						
						<div id="arqui" class="col s6">
							<input name='arquivo' size='20' type='file'>
						</div>
						<div id="button">
							<button class="btn waves-effect waves-light blue-grey" type="submit" name="action">Enviar
								<i class="material-icons right">send</i>
							</button>
						</div>
						<?php
						require_once 'functions.php';
						if (isset($_POST['pasta'])){
							up(gerenciaPasta());
						}
						?>
					</form> 
				</fieldset>
			</div>
		</div>
	</main>
</body>
<script type="text/javascript" src="..js/materialize.min.js"></script>
<?php
require_once '../html/footer.html';
?>
