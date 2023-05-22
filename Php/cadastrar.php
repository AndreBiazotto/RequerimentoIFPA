<?php
    include('conexao.php');

    if(isset($_POST['nome'])){
   
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $login = $mysqli->real_escape_string($_POST['login']);
    $escola = $mysqli->real_escape_string($_POST['escola']);
    $permissao = $mysqli->real_escape_string($_POST['permissao']);
    $senha = password_hash($mysqli->real_escape_string($_POST['senha']), PASSWORD_DEFAULT);

    $mysqli->query("CALL sp_adicionar_tbl_usuario('$nome', '$login', '$senha', '$escola', '$permissao')") or die($mysqli->error);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR USUARIO</title>
</head>
<body>
    <h2>CADASTRO DE USUARIO</h2>
    <form action="" method="POST">
        <p>
            <label>NOME</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>LOGIN</label>
            <input type="text" name="login">
        </p>
        <p>
            <label>ESCOLA</label>
            <input type="text" name="escola">
        </p>
        <p>
            <label>PERMISSAO</label>
            <input type="text" name="permissao">
        </p>
        <p>
            <label>SENHA</label>
            <input type="password" name="senha">
        </p>
        <button type="submit">CADASTRAR</button>
    </form>
</body>
</html>