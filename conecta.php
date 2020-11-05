<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'fundamentes';

// Conecta-se ao banco de dados MySQL
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

$sql= "SET NAMES 'utf8'";
mysqli_query($conexao, $sql);
$sql = 'SET character_set_connection=utf8';
mysqli_query($conexao, $sql);
$sql ='SET character_set_client=utf8';
mysqli_query($conexao, $sql);
$sql ='SET character_set_results=utf8';
mysqli_query($conexao, $sql);


// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()){

	echo 'ERRO DE CONEXÃO!';}

	;
?>


