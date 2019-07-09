  <!DOCTYPE html>
  <html>
    <head>
      <title>WebMaster.com</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Import CSSs da pagina-->
      <link rel="stylesheet" type="text/css" href="../css/base.css">
      <link rel="stylesheet" type="text/css" href="../css/tabela.css">
      <link rel="stylesheet" type="text/css" href="../css/sDownload.css">
      <link rel="stylesheet" type="text/css" href="../css/header.css">
    </head>
    <body id='body'>
	    <div class="teal lighten-2 ">
	    <?php
			require_once ('../html/headerD.html');
		?>
		</div>
    	<div >
    		<div id='cabecalho'  class="card-panel teal lighten-2">
    			Filmes
    		</div>
    		<div>
    			<div id="tabela">
    				<table id="table">
        				<thead id="theader">
          					<tr>
				              <th>Nome</th>
				              <th>Tamanho</th>
				              <th id="dir">Download</th>
				          </tr>
				        </thead>
                <?php
                  require_once ('functions.php');
                  leVideo();
                ?>
    			</div>
    		</div>
    	</div>
      <!--JavaScript no final do corpo otimiza o carregamento da página-->

      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
    <?php
    	require_once '../html/footer.html';
    ?>