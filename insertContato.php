<?php

	include 'conexao.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$telefone = $_POST['telefone'];
	$CPF = $_POST['cpf'];
	$proposta = $_POST['proposta'];

	$consulta = $cn->query("select email_usu from formulario where email_usu = '$email';");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC); // transformando em array para leitura (CASO PRECISE).

	if($consulta ->rowCount() == 1){
		header('location:erro1.php');
	}
	else{
		$incluir = $cn->query("insert into formulario values (Default, '$nome', '$email', '$endereco', '$cidade',
			'$telefone', '$CPF', '$proposta');");
		header('location:ok.php');
	}

?>
	