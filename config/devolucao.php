<?php

include("conexao.php");

$idRegistro = $_POST['idRegistro'];

$sqlDevolucao = $mysqli->prepare("DELETE FROM emprestimos WHERE idRegistro = (?)");

try {
    
    $sqlDevolucao->bind_param("s", $idRegistro);

    $sqlDevolucao->execute();

    header("location: ../home.php");

} catch (Exception $e) {
    echo "$e";
}

?>