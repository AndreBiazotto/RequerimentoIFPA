<?php 

include("../Php/protect.php");
include("../Php/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql_turma = $mysqli->query("SELECT * FROM turma WHERE turma = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar turma</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <thead>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Turno</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            while ($aluno = $sql_turma->fetch_assoc()) {
            ?>
            <tr>
                <td> <?php echo $aluno['matricula']; ?> </td>
                <td> <?php echo $aluno['nome']; ?> </td>
                <td> <?php echo $aluno['turma']; ?> </td>
                <td> <?php echo $aluno['ano']; ?> </td>
                <td> <?php echo $aluno['turno']; ?> </td>
                <td> <?php echo $id; ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
    <?php 
    if ($_SESSION['permissoes'] == "DIR") {
    ?>
        <button> <a href="../Php/excluirTurma.php?id=<?php echo $id;?>"> Excluir turma </a> </button>
    <?php
    }
    ?>
</body>
</html>