<?php

include("conexao.php");

    if (isset($_POST['login']) || isset($_POST['senha'])) {
        if(strlen($_POST['login']) == 0) {
            echo "Preencha o seu login";
        } elseif (strlen($_POST['senha']) == 0) {
            echo "Preencha a sua senha";
        } else {

            $login = $mysqli->real_escape_string($_POST['login']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            if (strpos($login, ".") != false) {
                $sql_code = "SELECT * FROM tbl_users WHERE login = '$login' LIMIT 1";
                $sql_query = $mysqli->query($sql_code) or die("Falha ao executar o SQL: " . $mysqli->error);
    
                $usuario = $sql_query->fetch_assoc();
    
                if (password_verify($senha, $usuario['senha'])) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
    
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['login'] = $usuario['login'];
                    $_SESSION['escola'] = $usuario['escola'];
                    $_SESSION['permissoes'] = $usuario['permissoes'];
    
                    header('Location:../Php/redirecionamento.php');
    
                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos!";
                }

            } else if (strpos($login, 'DOC') !== false) {
                $sql_code = "SELECT * FROM tbl_docente_user WHERE login = '$login' LIMIT 1";
                $sql_query = $mysqli->query($sql_code) or die("Falha ao executar o SQL: " . $mysqli->error);
                
                $usuario = $sql_query->fetch_assoc();
                $id = $usuario['id'];

                $sql_query_rg = $mysqli->query("SELECT rg_docente FROM tbl_docente_geral WHERE id = '$id'") or die("Falha ao executar o SQL: " . $mysqli->error);
                $rg = $sql_query_rg->fetch_assoc();
                while($fetch = $sql_query_rg->fetch_assoc()) {
                    echo "<p>";
                    foreach ($fetch as $field => $value) {
                        echo $field . ' => ' . $value . ' | ';
                    }
                    echo "</p>";
                }
                if ($senha == "2023".$rg['rg_docente']) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    
                    $_SESSION['login'] = $usuario['login'];
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['email'] = $usuario['email'];
    
                    header('Location:../Php/redirecionamento.php');
                } else if (password_verify($senha, $usuario['senha'])) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
    
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['login'] = $usuario['login'];
                    $_SESSION['escola'] = $usuario['escola'];
                    $_SESSION['permissoes'] = $usuario['permissoes'];
    
                    header('Location:../Php/redirecionamento.php');
    
                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos!";
                }
            } else {
                echo $login;
                echo "pagina não construida";
            }
        }
    }
?>
