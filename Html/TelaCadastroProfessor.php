<?php 

include("../Php/protect.php");
include("../Php/conexao.php");

if ($_SESSION['permissoes'] != "DIR") {
    die("Você não pode acessar essa área");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width">
        <title>Tela de cadastro de professor</title>
        <link rel="stylesheet" type="text/css" href="../Css/CadProf.css">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    </head>
    <body>
        <img src="../Imagens/Fundo.png" alt="Tela de fundo" class="FundoP">
        <div class="boxP">
            <div class="imgP">
                <img src="../Imagens/Cadastro.svg" alt="Imagem de cadastro">
            </div>
            <div class="formP">
                <form action="../Php/cadastrarDocente.php" method="POST">
                    <div class="formPP">
                        <div class="cadastroP">
                            <h3>Cadastre o docente</h3>
                        </div>
                        <div class="botaoAEntrarP">
                            <button> <a href="./Diretoria/TelaDiretoria.php">Voltar</a></button>
                        </div>
                    </div>
                    <div class="inputDivGroupP">
                        <div class="inputsP">
                            <label for="firstname"> Nome </label>
                            <input name="Nome" id="firstname" type="text" placeholder="Insira o primeiro nome..." required>
                        </div>
                        <div class="inputsP">
                            <label for="born"> Data de nascimento </label>
                            <input id="born" type="date" placeholder="DD/MM/AAAA" required>
                        </div>
                        <div class="inputsP">
                            <label for="rg"> RG </label>
                            <input name="rg" id="rg" type="text" placeholder="Insira o numero de rg..." required>
                        </div>
                        <div class="inputsP">
                            <label for="cpf"> CPF </label>
                            <input name="cpf" id="cpf" type="text" placeholder="Insira o numero do cpf, exemplo: 000.000.000-00" required>
                        </div>
                        <div class="inputsP">
                            <label for="email"> E-mail </label>
                            <input name="email" id="email" type="email" placeholder="exemplo@.com.br" required>
                        </div>
                    </div>
                    <div class="botaoCadastrarP"> <!-- preciso que você verifique direito como finaliza o cadastro-->
                        <button><a type="submit">Cadastrar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>