<?php
    include("conexao.php");

    $nome = $_POST['nomeProduto'];

    $date = "20/08/08";
    $user = 1;

    $sql = "SELECT * FROM produtos WHERE nomeProduto = '$nome'";
    $sqlSave = $mysqli->prepare("INSERT INTO emprestimos(dataDev, idUsuario, idProduto) VALUES (?, ?, ?)");

    $sql_query = $mysqli->query($sql) or die("ERRO ao consultar " . $mysqli->error);

    $dados = $sql_query->fetch_assoc();

    if($sql_query->num_rows == 1) {
        $id = $dados['idProduto'];
        $nome = $dados['nomeProduto'];

        $sqlSave->bind_param("sss", $date, $user, $id);

        $sqlSave->execute();

        header("location: ../home.php");
    } else {
        echo "Erro ...";
    }
    
?>

