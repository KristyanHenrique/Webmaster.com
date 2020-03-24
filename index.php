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
</head>
<style type="text/css">
	body {
		display: flex;
		min-height: 100vh;
		flex-direction: column;
	}
	main {
		flex: 1 0 auto;
		background-image: url("img/aa.png");
	}
	#github{
		align-self: center;
	}
</style>
</style>
<body id="body">
	<?php
		require_once 'html/header.html';
	?>
	<main>
		<div class="container">
			<div class="row">
				<div class="col s4 m3">
					<div class="card blue-grey">
						<div class="card-content white-text center">
							<span class="card-title">Download</span>
							<hr class="blue-grey">
							<p class="center">Baixe Arquivos Pré-liberados</p>
						</div>
						<div class="card-action">
							<a href="php/sDownload.php">Download</a>
						</div>
					</div>
				</div>
				<div class="col s4 m3">
					<div class="card blue-grey">
						<div class="card-content white-text center">
							<span class="card-title">Vídeos</span>
							<hr class="blue-grey">
							<p class="center">Assista a vídeos pré-disponibilizados</p>
						</div>
						<div class="card-action">
							<a href="php/sVideo.php">Vídeos</a>
						</div>
					</div>
				</div>
				<div class="col s4 m3">
					<div class="card blue-grey">
						<div class="card-content white-text center">
							<span class="card-title">Upload</span>
							<hr class="blue-grey">
							<br />
							<p class="center">Envie Seus Arquivos</p>
						</div>
						<div class="card-action">
							<a href="php/sUpload.php">Upload</a>
						</div>
					</div>
				</div>
				<div class="col s4 m3">
					<div class="card blue-grey">
						<div class="card-content white-text center">
							<span class="card-title">WIP</span>
							<hr class="blue-grey">
							<br />
							<p class="center">Work In Progress</p>
						</div>
						<div class="card-action">
							<a href="php/sTeste.php">WIP</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col s4 m12">
					<div class="card blue-grey">
						<div class="card-content white-text center">
							<span class="card-title"><img src="https://img.icons8.com/ios/64/000000/github.png"></span>
							<hr class="blue-grey">
							<br />
							<p class="center">Baixe a penúltima versão deste sistema</p>
						</div>
						<div class="card-action">
							<a id="github" href="http://www.github.com/kristyanhenrique">Github</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>
	<!--JavaScript no final do corpo otimiza o carregamento da página-->
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php
	require_once 'html/footer.html';
?>