<?php

include("conexao.php");

$professor = $mysqli->real_escape_string($_POST['professor']);
$disciplina = $mysqli->real_escape_string($_POST['disciplina']);
$turma = $mysqli->real_escape_string($_POST['turma']);

$mysqli->query("INSERT INTO tbl_aula (professor,disciplina,turma) VALUES ('$professor','$disciplina','$turma')");

header('Location:../Html/Diretoria/Diretoria.php');
?>