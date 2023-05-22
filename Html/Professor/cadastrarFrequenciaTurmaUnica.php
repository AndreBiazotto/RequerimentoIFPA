<?php

include("../../Php/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql_results_turma = $mysqli->query("SELECT matricula, nome, tbl_diario_frequencia.turma FROM tbl_discente_user INNER JOIN tbl_diario_frequencia ON tbl_diario_frequencia.matricula_discente = tbl_discente_user.matricula WHERE tbl_diario_frequencia.turma = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../Css/tabelas.css">
    <title>Document</title>
</head>
<body>
    <h3>Turma</h3>
    <br>
    <div class="boxS">
        <div class="formS">
            <form action="Frequencia.html">
                <div class="formSS">
                    <div class="textS">
                        <h3>Registro de frequência</h3>
                    </div>
                </div>
                <div class="inputDivGroupS">
                    <table border="1" cellpadding="10">
                    <thead>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Turma</th>
        </thead>
                        <tbody>
                        <?php 
            while ($turmas = $sql_results_turma->fetch_assoc()) {
                        ?>
                        <tr>
                <td> <?php echo $turmas['matricula']; ?> </td>
                <td> <?php echo $turmas['nome']; ?> </td>
                <td> <?php echo $turmas['turma']; ?> </td>
                <td> <button> PRESENTE </button> </td>
            </tr>
                        <?php   
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
