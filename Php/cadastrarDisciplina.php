<?php

include("conexao.php");

$arquivo = $_FILES['plane'];

if ($arquivo['error']) 
    echo "Falha ao enviar arquivo.";

if ($arquivo['size'] > 2098000)
    die("Arquivo muito grande. Max: 2MB");

$pasta = "../planejamentos/";
$nomeDoArquivo = $arquivo['name'];
$novoNomeDoArquivo = uniqid();
$extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

if ($extensao != 'pdf')
    die("Tipo de arquivo não aceito");

$path = $pasta . $novoNomeDoArquivo . "." . $extensao;

$deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

if ($deu_certo) {
    $mysqli->query("CALL sp_cadastrar_disciplina('$nomeDoArquivo', '$path','$codigo','$nome')") or die($mysqli->error);
} else {
    echo "<p>Falha ao enviar o arquivo</p>";
}

header('Location:../Html/Diretoria/Diretoria.php');

?>