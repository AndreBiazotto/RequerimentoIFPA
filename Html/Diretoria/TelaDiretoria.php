<?php

include("../../Php/protect.php");

if ($_SESSION['permissoes'] != "DIR") {
    die("Você não pode acessar essa área");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Diretoria</title>
</head>
<body>
    <h3>Tela da Diretoria</h3>
    <p>
        <button><a href="../TelaCadastroProfessor.php">CADASTRAR PROFESSOR</a></button>
    </p>
    <p>
        <button><a href="../editarTurmas.php">Lista turmas</a></button>
    </p>
    <p>
        <a href="../TelaCadastroAluno.php">matricular aluno</a>
    </p>
    <p>
        <a href="../../Php/logout.php">sair</a>
    </p>
    <p>
        <a href="../TelaCadastroProfessor.php">TelaCadastroProfessor</a>
    </p>
    <p>
        <a href="TelaCadastroDisciplina.html">Cadastrar Disciplina</a>
    </p>
    <p>
        <a href="TelaCadastroAulas.php">Cadastrar Aulas</a>
    </p>
</body>
</html>