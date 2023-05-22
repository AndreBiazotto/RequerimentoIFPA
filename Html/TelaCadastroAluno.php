<?php

include("../Php/protect.php");
include("../Php/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width">
        <title>Tela de cadastro de aluno</title>
        <link rel="stylesheet" type="text/css" href="../Css/CadAlu.css">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    </head>
    <body>
        <img src="../Imagens/Fundo.png" alt="Tela de fundo" class="FundoA">
        <div class="boxA">
            <div class="imgA">
                <img src="../Imagens/Cadastro.svg" alt="Imagem de cadastro">
            </div>
            <div class="formA">
                <form action="../Php/cadastrarDiscente.php" method="POST">
                    <div class="formAA">
                        <div class="cadastro">
                            <h3>Cadastre o discente</h3>
                        </div>
                        <div class="botaoAEntrarA">
                            <button> <a href="TelaInicial.html">Entrar</a></button>
                        </div>
                    </div>
                    <div class="inputDivGroupA">
                        <div class="inputsA">
                            <label for="firstname"> Nome Completo </label>
                            <input name="nome" id="firstname" type="text" placeholder="Insira o nome..." required>
                        </div>
                        <div class="inputsA">
                            <label for="born"> Data de nascimento </label>
                            <input name="data_nascimento" id="born" type="date" placeholder="DD/MM/AAAA" required>
                        </div>
                        <div class="inputsA">
                            <label for="rg"> RG </label>
                            <input name="rg" id="rg" type="text" placeholder="Insira o numero de rg..." required>
                        </div>
                        <div class="inputsA">
                            <label for="cpf"> CPF </label>
                            <input name="cpf" id="cpf" type="text" placeholder="Insira o numero do cpf, exemplo: 000.000.000-00" required>
                        </div>
                        <div class="inputsA">
                            <label for="email"> E-mail </label>
                            <input name="email" id="email" type="email" placeholder="exemplo@.com.br" required>
                        </div>
                        <div class="inputsA">
                            <label for="lastname"> Nome do responsavel </label>
                            <input name="nome_responsavel" id="lastname" type="text" placeholder="Insira o nome do responsável..." required>
                        </div>
                        <div class="inputsA">
                            <label for="tel"> Telefone de responsavel</label>
                            <input name="telefone_responsavel" id="tel" type="tel" placeholder="(XX) xxxxx-xxxx" required>
                        </div>
                        <div class="inputsA">
                            <label for="turma"> Turma </label>
                            <input name="turma" id="turma" type="number" placeholder="Insira o id da turma..." required>
                        </div>
                    </div>
                    <div class="botaoCadastrarA"> 
                        <button type="submit"><a >Cadastrar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>