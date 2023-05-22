<?php

include("../../Php/conexao.php");

$sql_results_turmas = $mysqli->query("SELECT tbl_turma.id, tbl_disciplina.nome, ano, turno FROM tbl_aula INNER JOIN tbl_docente_user ON  tbl_aula.professor = tbl_docente_user.login INNER JOIN tbl_disciplina ON tbl_aula.disciplina = tbl_disciplina.codigo INNER JOIN tbl_turma ON tbl_turma.id = tbl_aula.turma;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../Css/tabelas.css">
    <title>Cadastrar Frequencia</title>
</head>
<body>
    <h3>Lista de turmas</h3>
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
                        <th>Disciplina</th>
                        <th>Ano</th>
                        <th>Turno</th>
                        </thead>
                        <tbody>
                        <?php 
            while ($turmas = $sql_results_turmas->fetch_assoc()) {
                        ?>
                        <tr>
                            <td> <?php echo $turmas['nome']; ?> </td>
                            <td> <?php echo $turmas['ano']; ?> </td>
                            <td> <?php echo $turmas['turno']; ?> </td>
                            <td> <a href="../Professor/cadastrarFrequenciaTurmaUnica.php?id=<?php echo $turmas['id']; ?>">ABRIR TURMA</a> </td>
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