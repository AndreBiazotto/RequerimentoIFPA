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
                            <h3>Bem vindo(a) ao menu da diretoria</h3>
                        </div>
                        <div class="textS">
                            <h3>Diretor(a) <?php echo $_SESSION['nome']; ?></h3>
                        </div>
                    </div>
                    <div class="inputDivGroupS">
                        <div class="inputsS">
                            <button> <a href="../TelaCadastroProfessor.php">Cadastrar professor</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../editarTurmas.php">Lista de turmas</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../TelaCadastroAluno.php">Matricular aluno</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../TelaCadastroProfessor.php">Cadastrar professor</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="TelaCadastroDisciplina.html">Cadastrar disciplina</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="TelaCadastroAulas.php">Cadastrar aulas</a> </button>
                        </div>
                        <div class="inputsS">
                            <button> <a href="../../Php/logout.php"> Sair</a> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>