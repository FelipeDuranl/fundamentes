<?php

include 'conecta.php';

$tipo_login = $_POST['tipo'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nasc = $_POST['data_nasc'];
$senha = $_POST['senha'];

	if ($tipo_login == 1) {
		
		$consulta = "Insert into aluno (nomealuno, datanasc, email, telefone, login, senha) values ('$nome', '$data_nasc', '$email', '$telefone', '$login', '$senha')";
		$conexao -> query($consulta);
		header('Location: login.html');
	}
	elseif ($tipo_login == 2) {

		$consulta = "Insert into professsor (nomepro, data_nasc, email, telefone, login, senha) values ('$nome', '$data_nasc', '$email', '$telefone', '$login', '$senha')";
		$conexao -> query($consulta);
		header('Location: login.html');
	}

	else {
		header('Location: index.html');
	}
?>