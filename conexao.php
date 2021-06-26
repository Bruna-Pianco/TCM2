<?php

    $servidor = "Localhost";
	$usuario = "seu usuario";
	$senha = "sua senha";
	$banco = "seu banco de dados";
	
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>
