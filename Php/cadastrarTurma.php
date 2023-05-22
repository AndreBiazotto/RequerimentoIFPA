<?php

include("protect.php");
include("conexao.php");

$ano = $mysqli->real_escape_string($_POST['ano']);
$turno = $mysqli->real_escape_string($_POST['turno']);

$sql_code = "INSERT INTO tbl_turma (ano, turno) VALUES ('$ano','$turno')";

$mysqli->query($sql_code) or die($mysqli->error);

if ($_SESSION['permissoes'] == "DIR") {
    header('Location:../Html/Diretoria/Diretoria.php');
} else if ($_SESSION['permissoes'] == "SEC") {
    header('Location:../Html/Secretaria/Secretaria.php');
}
?>