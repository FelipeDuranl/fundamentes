<?php

header('Content-type: text/html; charset=ISO-8859-1');

include 'conecta.php';

$nome = $_POST['Nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel']

$consulta = "INSERT INTO ALUNOS (Nome,email,senha) VALUES ('$nome','$email','$senha')";
$conexao->query($consulta);

header('Location: login.php');
?>