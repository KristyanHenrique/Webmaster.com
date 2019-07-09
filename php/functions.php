<?php
	/*
		
		!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		!! Alterar Layout deste sistema !!
		!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

		Lista os arquivos em forma de tabela da pasta "video" do servidor para um sistema de streaming
		Kristyan
		05/07/2019
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
							echo "<video width='320' height='240' controls>
  									<source src='".$path.$arquivo."' type='video/mp4'>
								  </video>";
						echo "</td>";
					}
				echo "</tr>";
			echo "</tbody>";
		}
		$diretorio -> close();
		echo "</table>";
	}


	/*
		Gambiarra para verificar login

		***************
		* Fora de Uso *
		***************

		Kristyan
		16/05/2019
	*/
	function verificaLogin()
	{
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			header('location:../index.php');
		}
	}
	
	/*
		Gambiarra para fazer login

		***************
		* Fora de Uso *
		***************

		Kristyan
		16/05/2019
	*/

	function loginGambi()
	{
		$login = $_POST['nome'];		
		$senha = $_POST['senha'];

		if ($senha == '100') 
		{
			session_start();

			$_SESSION['nome'] = $login;
			$_SESSION['senha'] = $senha;
		} 

		else 
		{
			session_destroy();	
			
			unset ($_SESSION['nome']);
			unset ($_SESSION['senha']);
		}	
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
							echo "";
						echo "</td>";
					}
					if ($arquivo != "." && $arquivo != '..') 
					{
						echo "<td>";
						echo"<a href='".$path.$arquivo."' download='$arquivo'>
								 <button class='waves-effect waves-light btn'>
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
?>