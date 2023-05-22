<?php
include("../../Php/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width">
    <title>Tela de cadastro de disciplina</title>
    <link rel="stylesheet" type="text/css" href="../../Css/CadDis.css">

</head>
<body>
    <img src="../../Imagens/Fundo.png" alt="Tela de fundo" class="FundoD">
    <div class="boxD">
        <div class="imgD">
            <img src="../../Imagens/disciplina.svg" alt="Imagem de cadastro de turma">
        </div>
        <div class="formD">
            <form action="../../Php/cadastrarAulas.php" method="POST">
                <div class="formDD">
                    <div class="cadastroD">
                        <h3>Cadastre de Aulas</h3>
                    </div>
                </div>
                <div class="inputDivGroupD">
                    <div class="inputsD">
                        <label for="cod"> Professor </label>
                        <select name="professor" id="cod">
                            <?php
                            $results = $mysqli->query("SELECT * FROM tbl_docente_user");
                            while ($professores = $results->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $professores['login']?>"><?php echo $professores['nome']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="inputsD">
                        <label for="nomet"> Disciplina </label>
                        <select name="disciplina" id="cod">
                            <?php
                            $results = $mysqli->query("SELECT * FROM tbl_disciplina");
                            while ($disciplina = $results->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $disciplina['codigo']?>"><?php echo $disciplina['nome']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="inputsD">
                        <label for="nomet"> Turma </label>
                        <select name="turma" id="cod">
                            <?php
                            $results = $mysqli->query("SELECT * FROM tbl_turma");
                            while ($turma = $results->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $turma['id']?>"><?php echo $turma['ano']."/".$turma['turno']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="botaoCadastrarD"> 
                    <button type="submit"><a>Cadastrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>