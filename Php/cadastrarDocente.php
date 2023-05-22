<?php

include("conexao.php");

if(!isset($_POST['Nome'])) {
    echo "Falta o nome";
} else if(!isset($_POST['rg'])) {
    echo "Falta o RG";
} else if(!isset($_POST['cpf'])) {
    echo "Falta o CPF";
} else if(!isset($_POST['email'])) {
    echo "Falta o e-mail";
} else {

    $nome = $mysqli->real_escape_string($_POST['Nome']);
    $rg = $mysqli->real_escape_string($_POST['rg']);
    $cpf = $mysqli->real_escape_string($_POST['cpf']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $telefone = $mysqli->real_escape_string($_POST['telefone']);

    $mysqli->query("CALL sp_cadastrar_docente ('$nome','$rg','$cpf','$email','$telefone')") or die($mysqli->error);

    header('Location:../Html/Diretoria/Diretoria.php');

}
?>