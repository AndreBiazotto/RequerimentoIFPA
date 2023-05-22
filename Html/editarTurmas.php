<?php 

include("../Php/protect.php");
include("../Php/conexao.php");

$sql_turmas = $mysqli->query("SELECT id, turno, ano FROM tbl_turma");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Turmas</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <thead>
            <th>Ano</th>
            <th>Turno</th>
            <th>Editar</th>
        </thead>
        <tbody>
            <?php
            while ($turma = $sql_turmas->fetch_assoc()) {
            ?>
            <tr>
                <td> <?php echo $turma['ano']; ?> </td>
                <td> <?php echo $turma['turno']; ?> </td>
                <td> <a href="./editarTurmaUnica.php?id=<?php echo $turma['id']; ?>">EDITAR<?php $turma['id']; ?></a> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p><a href="./Diretoria/TelaDiretoria.php">voltar</a></p>
</body>
</html>