<?php
	session_start();


	$usuario_autenticado = false;

	$senha = $_POST['senha'];
	$email = $_POST['email'];

	$senha_valida = 'zimbra123';
	$email_valido = 'arthurzera@gmail.com';
	

	if($senha == $senha_valida && $email == $email_valido){
		$usuario_autenticado = true;
	}else{
		$usuario_autenticado = false;
	}


	if($usuario_autenticado == true){
		header("Location: home.php");
		$_SESSION['autenticado'] = 's';
	}else{
		header("Location: index.php?login=erro");
		$_SESSION['autenticado'] = 'n';
	}
?>