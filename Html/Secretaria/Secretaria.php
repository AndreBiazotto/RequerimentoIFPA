<?php
    include("../../Php/protect.php")
?>

<!DOCTYPE html>
<html lang="Pt-br">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width">
        <title>Tela da secretaria</title>
        <link rel="stylesheet" type="text/css" href="../../Css/Secretaria.css">
    </head>
    <body>
        <img src="../../Imagens/Fundo.png" alt="Tela de fundo" class="FundoS">
        <div class="boxS">
            <div class="imgS">
                <img src="../../Imagens/Secretaria.svg" alt="Imagem do menu da secretaria">
            </div>
            <div class="formS">
                <form action="Secretaria.php">
                    <div class="formSS">
                        <div class="textS">
                            <h3>Bem vindo(a) ao menu da secretaria</h3>
                        </div>
                    </div>
                    <div class="inputDivGroupS">
                        <div class="inputsS">
                            <button> <a href="#">Boletim</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../TelaCadastroAluno.php">Matricular aluno</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../TelaCadastroTurma.php">Cadastrar turma</a> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>