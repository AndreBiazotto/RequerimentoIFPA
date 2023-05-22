<?php

include('protect.php');

include('conexao.php');

if (strpos($_SESSION['login'], "DOC") !== false) {
    header('Location:../Html/Professor/Professor.php');
} else if ($_SESSION['permissoes'] == "DIR") {
    header('Location:../Html/Diretoria/Diretoria.php');
} else  if ($_SESSION['permissoes'] == "SEC") {
    header('Location:../Html/Secretaria/Secretaria.php');
} else {
    echo "pagina em construcao";
    echo $_SESSION['permissoes'];
}

?>