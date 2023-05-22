<?php

include("../Php/protect.php");

if ($_SESSION['permissoes'] != "SEC" and $_SESSION['permissoes'] != "DIR" ) {
  die("Você não pode acessar essa área");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width">
    <title>Tela de cadastro de turma</title>
    <link rel="stylesheet" type="text/css" href="../Css/CadTurma.css">
  </head>
<body>
  <img src="../Imagens/Fundo.png" alt="Tela de fundo" class="FundoT">
  <div class="boxT">
    <div class="imgT">
      <img src="../Imagens/Turma.svg" alt="Imagem de cadastro de turma">
    </div>
    <div class="formT">
      <form action="../Php/cadastrarTurma.php" method="POST">
        <div class="formTT">
          <div class="cadastroT">
            <h3>Cadastre a turma</h3>
          </div>
        </div>
        <div class="inputDivGroupT">
          <div class="inputsT">
            <label for="serie"> Ano (Série)</label>
            <input name="ano" id="serie" type="text" placeholder="Insira o ano..." required>
          </div>
          <div class="inputsT">
            <label for="turno"> Turno </label>
            <input name="turno" id="turno" type="text" placeholder="Insira o turno..." required>
          </div>
        </div>
        <div class="botaoCadastrarT">
          <button type="submit"><a>Cadastrar</a></button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>