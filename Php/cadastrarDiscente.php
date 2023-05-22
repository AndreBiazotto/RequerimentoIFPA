<?php

include("../Php/conexao.php");

$nome = $mysqli->real_escape_string($_POST['nome']);
$data_nascimento = $mysqli->real_escape_string($_POST['data_nascimento']);
$rg = $mysqli->real_escape_string($_POST['rg']);
$cpf = $mysqli->real_escape_string($_POST['cpf']);
$email = $mysqli->real_escape_string($_POST['email']);
$nome_responsavel = $mysqli->real_escape_string($_POST['nome_responsavel']);
$telefone_responsavel = $mysqli->real_escape_string($_POST['telefone_responsavel']);
$turma = $mysqli->real_escape_string($_POST['turma']);

$mysqli->query("CALL sp_matricular_discente('$nome','$data_nascimento','$rg','$cpf','$nome_responsavel','$email','$telefone_responsavel','$turma')") or die($mysqli->error);

header('Location:../Html/Diretoria/Diretoria.php');

?>