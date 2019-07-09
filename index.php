<!DOCTYPE html>
<html>
<head>
	<title>WebMaster.com</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet"> 
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Import CSSs da pagina-->
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body id="body">
	<?php
		require_once 'html/header.html';
	?>
<div id='row' class="row">
	<div class="col s3 ">
		<div class="card">
			<div class="card-image">
				<img src="img/download.png">
				<span class="card-title"></span>
			</div>
			<div class="card-content">
				<p>Sistema de Download</p>
			</div>
			<div class="card-action">
				<a href="php/sDownload.php">Download</a>
			</div>
		</div>		
	</div>
	<div class="col s3 ">
		<div class="card">
			<div class="card-image">
				<img src="img/teste.png">
				<span class="card-title"></span>
			</div>
			<div class="card-content">
				<p>Ambiente de Testes</p>
			</div>
			<div class="card-action">
				<a href="php/sTeste.php">TESTE!!</a>
			</div>
		</div>
	</div>
	<div class="col s3 ">
		<div class="card">
			<div class="card-image">
				<img src="img/upload.png">
				<span class="card-title"></span>
			</div>
			<div class="card-content">
				<p>Sistema de Upload</p>
			</div>
			<div class="card-action">
				<a href="php/sUpload.php">Upload</a>
			</div>
		</div>
	</div>
	<div class="col s3 ">
		<div class="card">
			<div class="card-image">
				<img src="img/git.png">
				<span class="card-title"></span>
			</div>
			<div class="card-content">
				<p>GitHub</p>
			</div>
			<div class="card-action">
				<a href="#">Fork Me!</a>
			</div>
		</div>
	</div>
</div>
	    <!--JavaScript no final do corpo otimiza o carregamento da página-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php
	require_once 'html/footer.html';
?>