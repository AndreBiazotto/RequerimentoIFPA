<?php

include("../Php/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$mysqli->query("DELETE FROM tbl_turma WHERE id = '$id'");

header('Location:../Html/editarTurmas.php');
?>


