<?php 
	$titulo_chamado = str_replace('#', '-', $_POST['titulo']);
	$categoria_chamado = str_replace('#', '-', $_POST['categoria']);
	$descricao_chamado = str_replace('#', '-', $_POST['descricao']);

	$texto = "$titulo_chamado#$categoria_chamado#$descricao_chamado".PHP_EOL;

	$arquivo = fopen("chamados.txt", "a");
	fwrite($arquivo, $texto);
	fclose($arquivo);

	header("Location: abrir_chamado.php?concluido")

?>