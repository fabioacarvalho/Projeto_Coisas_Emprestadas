<?php
include("conexao.php");

$nomeProduto = $mysqli->real_escape_string($_POST['nomeProduto']);
$categoria = $mysqli->real_escape_string($_POST['categoriaProduto']);

$sqlSave = $mysqli->prepare("INSERT INTO produtos(nomeProduto, categoria) VALUES (?, ?)");

$sqlSave->bind_param("ss", $nomeProduto, $categoria);

$sqlSave->execute();

header("location: ../paginas/cadastroProdutos.php");
?>