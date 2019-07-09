<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$nome = $_POST['nome'];
		$id = md5($nome);
		$senha = md5($_POST['senha']);
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$cpf = $_POST['cpf']; 

		$dados = array($id,$nome,$senha,$email,$telefone,$cpf);

		echo "<pre>";
		var_dump($dados);
		echo "</pre>";

	?>
</body>
</html>