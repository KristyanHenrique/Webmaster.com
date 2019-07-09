<?php
	function gerenciaPasta(){
			$pasta = $_POST['pasta'];
			$pasta = "teste/".$pasta;
			if (is_dir($pasta))
			{
				echo "Abrindo Pasta";
			}
			else
			{
				mkdir($pasta);
			}

			return $pasta.'/';
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
?> 