<?php 

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	if ($senha == "12") {
		session_start();
		
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		
		echo("start");
	}else{
		echo "failed";
	}
	echo'<br><pre>'.var_dump($_SESSION).'</pre> <br>';
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	session_destroy();

	echo'<br><pre>'.var_dump($_SESSION).'</pre> <br>';
	header('location:login.php');
?>