  <!DOCTYPE html>
  <html>
    <head>
      <title>WebMaster.com</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Import CSSs da pagina-->
      <link rel="stylesheet" type="text/css" href="../css/sDownload.css">
    </head>
   <style type="text/css">
      #cabecalho{
        font-family: 'Anton', sans-serif;
        font-size: 20px;
      }
      body{
        background-color: black;
      }
   </style>
    <body id='body'>
	      <main>
          <?php
			       require_once ('../html/header.html');
		      ?>

          <div id='cabecalho' class="card-panel blue-grey">
              <span class="blue-grey-text text-lighten-4">
                  <?php
                      $video=$_POST['video'];
                      $rest = substr($video, 9);
                      echo $rest;
                  ?>
              </span>
          </div>

          <div class="row">
                  <?php
                      echo "<video class='col offset-s2' width='900' height='500' controls>
                          <source src='".$video."' type='video/mp4'>
                      </video>";
                  ?>
          </div>
          <!--JavaScript no final do corpo otimiza o carregamento da página-->
              <script type="text/javascript" src="js/materialize.min.js"></script>
          </main>
    </body>
    <?php
    	require_once '../html/footer.html';
    ?>