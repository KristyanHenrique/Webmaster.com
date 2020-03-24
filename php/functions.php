<?php
	/*
		Lista os arquivos em forma de tabela da pasta "video" do servidor para um sistema de streaming
		Kristyan
		05/07/2019

		Atualizado 21/08/2019
		Kristyan
	*/
	function leVideo()
	{
		$path = "../video/";
		$diretorio = dir($path);
		while($arquivo = $diretorio -> read())
		{
			echo "<tbody id='tabody'>";
				echo "<tr>";
					if ($arquivo != "." && $arquivo != '..' ) 
					{
						echo "<td>";
							echo $arquivo;
						echo "</td>";
					}
					if ($arquivo != "." && $arquivo != '..' ) 
					{
						echo "<td>";
							echo "";
						echo "</td>";
					}
					if ($arquivo != "." && $arquivo != '..') 
					{
						echo "<td>";
							echo "<form action='playerVideo.php' method='POST'><button type='submit' class='btn waves-effect waves-light blue-grey' value='".$path.$arquivo."' name='video' >Assistir</form>"	;
						echo "</td>";
					}
				echo "</tr>";
			echo "</tbody>";
		}
		$diretorio -> close();
		echo "</table>";
	}


	/*
		Faz a criação (se necessário) de uma pasta (dentro da pasta upload no servidor) e salva o arquivo que foi recebido na mesma.  
		Kristyan
		10/05/2019
	*/
	
	function gerenciaPasta()
	{
			$pasta = $_POST['pasta'];
			$pasta = "../upload/".$pasta;
			if (is_dir($pasta))
			{
				return $pasta.'/';	
			}
			else
			{
				mkdir($pasta);
				return $pasta.'/';
			}
	}

	function up($pasta)
	{
		$uploaddir = $pasta;

		$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
		if (isset($uploadfile)) 
		{
			if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile))
			{
				echo 'Arquivo Enviado';
			}
			else
			{
				echo 'Arquivo não enviado';
			}
		}	
	}
	/*
		Lista os arquivos em forma de tabela da pasta "arquivos" do servidor 
		Kristyan
		07/05/2019
	*/
	function leArquivos()
	{
		$path = "../arquivos/";
		$diretorio = dir($path);
		while($arquivo = $diretorio -> read())
		{
			echo "<tbody id='tabody'>";
				echo "<tr>";
					if ($arquivo != "." && $arquivo != '..' ) 
					{
						echo "<td>";
							echo $arquivo;
						echo "</td>";
					}
					if ($arquivo != "." && $arquivo != '..' ) 
					{
						echo "<td>";
						echo arredondarTam(filesize($path.$arquivo));
						echo "</td>";
					}
					if ($arquivo != "." && $arquivo != '..') 
					{
						echo "<td>";
						echo"<a href='".$path.$arquivo."' download='$arquivo'>
								 <button class=' blue-grey waves-effect waves-light btn'>
									 <i class = 'material-icons right'>
										 cloud_download
									 </i>
								 	 Baixe
								 </button>
							 </a>";
						echo "</td>";
					}
				echo "</tr>";
			echo "</tbody>";
		}
		$diretorio -> close();
		echo "</table>";
	}

	/*
	
		Identifica o tamanho dos arquivos e adiciona o marcador de bits
		Kristyan
		18/08/2019

	*/

	function arredondarTam($taman)
	{
		$bytes = array(' B',' KB', ' MB', ' GB', ' TB');
	    foreach ($bytes as $val) {
	        if (1024 <= $taman) {
	            $taman = $taman / 1024;
	            continue;
	        }
	        break;
	    }
	    return round($taman, 0).$val;
	}

	/*
	
		Faz login no sistema com nome e senha 

		**********************	
		*Falta Banco de Dados*
		**********************

		Recupera a sessão da superglobal $_SESSION

		Kristyan
		16/03/2020

	*/

	function login($nome, $senha)
	{	
		$rs=conectaBanco($nome);

		if (isset($rs)) {
			if ($rs['nome']==$nome && $rs['senha']==$senha) {
				session_start();
				$_SESSION['nome']=$nome;
				$_SESSION['senha']=$senha;	
			}
		}else{
			echo "erro";
		}

		
	}

	function retLogin()
	{
		$nome=$_SESSION['nome'];
		$senha=$_SESSION['senha'];

		$sessao = array(1 => $nome, 2 => $senha);
		return $sessao;
	}

	function conectaBanco($nome)
	{
		$con_string = "host=localhost port=5432 dbname=webmaster user=postgres password=power2486";
		$bdcon = pg_connect($con_string);
		$result=pg_query($bdcon, "SELECT * FROM usuario where nome = '".$nome."'");
		$rs = pg_fetch_assoc($result);
		return $rs;
	}
?>