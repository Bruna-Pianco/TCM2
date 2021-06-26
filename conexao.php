<?php

    $servidor = "Localhost";
	$usuario = "root";
	$senha = "123456";
	$banco = "CelloGames";
	
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>